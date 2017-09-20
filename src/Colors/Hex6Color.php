<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Colors\RGBAColor;

    /**
     * Class Hex6Color
     *
     * Represents a color in the RGB system but constructed via a hex string (#rrggbb). No alpha channel!
     *
     * @api
     *
     * @package Chameleon\Colors
     */
    class Hex6Color extends RGBColor {
        /**
         * Class constructor
         *
         * @param string $hexString The 6-digit hexstring, e.g. #fe0da7
         */
        public function __construct(string $hexString) {
            $this -> setHex($hexString);
        }

        /**
         * Get string representation of this color
         * 
         * Format: #rrggbb
         *
         * @return string
         */
        public function __toString() : string {
            return $this -> getHex();
        }

        /**
         * Get hexadecimal value for this color
         * Format: #rrggbb
         *
         * @return string
         */
        public function getHex() : string {
            return sprintf("#%'.02X%'.02X%'.02X", $this -> red, $this -> green, $this -> blue);
        }

        /**
         * Set hexadecimal value for this color
         *
         * @param string $hexString The hexadecimal color value, Fomat: #rrggbb
         *
         * @return void
         */
        public function setHex(string $hexString) {
            $hexString = str_replace("#", "", $hexString);
            $this -> setRed(hexdec(substr($hexString, 0, 2)));
            $this -> setGreen(hexdec(substr($hexString, 2, 2)));
            $this -> setBlue(hexdec(substr($hexString, 4, 2)));
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) {
            return new Hex6Color("#" . 
                dechex($rgba -> getRed()) .
                dechex($rgba -> getGreen()) .
                dechex($rgba -> getBlue())
            );
        }
    }
?>