<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\Hex6Color;
    use Chameleon\Colors\RGBAColor;

    /**
     * Class Hex8Color
     *
     * Represents a color in the RGB system with alpha channel, but constructed via a hexstring (#rrggbbaa).
     *
     * @api
     *
     * @package Chameleon\Colors
     */
    class Hex8Color extends Hex6Color {
        /**
         * The alpha channel value [0, 127]
         *
         * @var int
         */
        protected $alpha;

        /**
         * Class constructor
         *
         * @param string $hexString The 8-digit hexstring, e.g. #fe0da722
         */
        public function __construct(string $hexString) {
            $this -> setHex($hexString);
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) {
            return new Hex8Color(sprintf("#%'.02X%'.02X%'.02X%'.02X",
                 $rgba -> getRed(),
                 $rgba -> getGreen(),
                 $rgba -> getBlue(),
                 $rgba -> getAlpha()
             ));
        }

        /**
         * Get string representation of this color
         * 
         * Format: #rrggbbaa
         *
         * @return string
         */
        public function __toString() : string {
            return $this -> getHex();
        }

        /**
         * Get hexadecimal value for this color
         * Format: #rrggbbaa
         *
         * @return string
         */
        public function getHex() : string {
            $hex = parent::getHex();
            $hex .= sprintf("%'.02X", $this -> alpha);
            return $hex;
        }

        /**
         * Set hexadecimal value for this color
         *
         * @param string $hexString The hexadecimal color value, Format: #rrggbb
         *
         * @return self
         */
        public function setHex(string $hexString) : self {
            parent::setHex($hexString);
            $hexString = str_replace("#", "", $hexString);
            $this -> setAlpha(hexdec(substr($hexString, 6, 2)));

            return $this;
        }

        /**
         * Get RGB alpha channel value
         *
         * @return int RGB alpha channel value [0, 127]
         */
        public function getAlpha() : int {
            return $this -> alpha;
        }

        /**
         * Set RGB alpha channel value
         *
         * @param int $alpha RGB alpha channel value [0x00, 0x7F]
         *
         * @return Hex8Color
         * @throws ValueOutOfBoundsException
         */
        public function setAlpha(int $alpha) : self {
            if (!$this -> checkRange($alpha, 0, 127)) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 127);
            }

            $this -> alpha = $alpha;

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function getRGBA() : RGBAColor {
            $rgba = parent::getRGBA();
            $rgba -> setAlpha($this -> alpha / RGBAColor::ALPHA_MAX);
            return $rgba;
        }
    }
?>