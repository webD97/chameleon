<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\Hex6Color;
    use \Chameleon\Colors\RGBAColor;

    class Hex8Color extends Hex6Color {
        /**
         * The alpha channel value [0, 127]
         *
         * @var int
         */
        private $alpha;

        /**
         * Class constructor
         *
         * @param string $hexstring The 8-digit hexstring, e.g. #fe0da722
         */
        public function __construct(string $hexstring) {
            $this -> setHex($hexstring);
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
            return strtoupper("#" .
                (($this -> getRed() < 16) ? "0" . dechex($this -> getRed()) : dechex($this -> getRed())) .
                (($this -> getGreen() < 16) ? "0" . dechex($this -> getGreen()) : dechex($this -> getGreen())) .
                (($this -> getBlue() < 16) ? "0" . dechex($this -> getBlue()) : dechex($this -> getBlue())) .
                (($this -> getAlpha() < 16) ? "0" . dechex($this -> getAlpha()) : dechex($this -> getAlpha()))
            );
        }

        /**
         * Set hexadecimal value for this color
         *
         * @param string $hexstring The hexadecimal color value, Fomat: #rrggbb
         * @return self
         */
        public function setHex(string $hexstring) : self{
            $hexstring = str_replace("#", "", $hexstring);
            $this -> setRed(hexdec(substr($hexstring, 0, 2)));
            $this -> setGreen(hexdec(substr($hexstring, 2, 2)));
            $this -> setBlue(hexdec(substr($hexstring, 4, 2)));
            $this -> setAlpha(hexdec(substr($hexstring, 6, 2)));

            return $this;
        }

        /**
         * Get RGB alpha channel value
         *
         * @return int RGB alpha channel avalue [0, 127]
         */
        public function getAlpha() : int {
            return $this -> alpha;
        }
        /**
         * Set RGB alpha channel value
         *
         * @param int $alpha RGB alpha channel avalue [0x00, 0x7F]
         * @return self
         */
        public function setAlpha(int $alpha) : self {
            if (!$this -> checkRange($alpha, 0, 127)) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 127);
            }

            $this -> alpha = $alpha;

            return $this;
        }

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, $this -> alpha);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new Hex8Color("#" . 
                dechex($rgba -> getRed()) .
                dechex($rgba -> getGreen()) .
                dechex($rgba -> getBlue()) .
                dechex($rgba -> getAlpha())
            );
        }
    }
?>