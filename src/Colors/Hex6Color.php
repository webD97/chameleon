<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Colors\RGBAColor;

    class Hex6Color extends RGBColor {
        /**
         * Class constructor
         *
         * @param string $hexstring The 6-digit hexstring, e.g. #fe0da7
         */
        public function __construct(string $hexstring) {
            $this -> setHex($hexstring);
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
            return strtoupper("#" .
                (($this -> red < 16) ? "0" . dechex($this -> red) : dechex($this -> red)) .
                (($this -> green < 16) ? "0" . dechex($this -> green) : dechex($this -> green)) .
                (($this -> blue < 16) ? "0" . dechex($this -> blue) : dechex($this -> blue))
            );
        }

        /**
         * Set hexadecimal value for this color
         *
         * @param string $hexstring The hexadecimal color value, Fomat: #rrggbb
         * @return void
         */
        public function setHex(string $hexstring) {
            $hexstring = str_replace("#", "", $hexstring);
            $this -> setRed(hexdec(substr($hexstring, 0, 2)));
            $this -> setGreen(hexdec(substr($hexstring, 2, 2)));
            $this -> setBlue(hexdec(substr($hexstring, 4, 2)));
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new Hex6Color("#" . 
                dechex($rgba -> getRed()) .
                dechex($rgba -> getGreen()) .
                dechex($rgba -> getBlue())
            );
        }
    }
?>