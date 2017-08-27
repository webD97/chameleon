<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBColor;

    class RGBAColor extends RGBColor {
        /**
         * The alpha channel value [0, 127]
         *
         * @var int
         */
        private $alpha;

        /**
         * Class constructor
         *
         * @param int $red RGB red channel value [0, 255]
         * @param int $green RGB green channel value [0, 255]
         * @param int $blue RGB blue channel value [0, 255]
         * @param int $alpha RGB alpha channel value [0, 127]
         */
        public function __construct(int $red, int $green, int $blue, int $alpha) {
            $this -> setRed($red);
            $this -> setGreen($green);
            $this -> setBlue($blue);
            $this -> setAlpha($alpha);
        }

        /**
         * Get string representation of this color
         * 
         * Format: rgba(red, green, blue, alpha)
         *
         * @return string
         */
        public function __toString() : string {
            return "rgba(" . $this -> getRed() . ", " . $this -> getGreen() . ", " . $this -> getBlue() . ", " . $this -> getAlpha() . ")";
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
         * @param int $alpha RGB alpha channel avalue [0, 127]
         * @return void
         */
        public function setAlpha(int $alpha) {
            if (!$this -> checkRange($alpha, 0, 127)) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 127);
            }

            $this -> alpha = $alpha;
        }

        public function getRGBA() : RGBAColor {
            return $this;
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new RGBAColor($rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue(), $rgba -> getAlpha());
        }
    }
?>