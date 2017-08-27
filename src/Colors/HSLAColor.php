<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\HSLColor;
    use \Chameleon\Colors\RGBAColor;

    class HSLAColor extends HSLColor {
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
        public function __construct(int $hue, float $saturation, float $lightness, float $alpha) {
            $this -> setHue($hue);
            $this -> setSaturation($saturation);
            $this -> setLightness($lightness);
            $this -> setAlpha($alpha);
        }

        /**
         * Get string representation of this color
         * 
         * Format: hsla(hue, saturation, lightness, alpha)
         *
         * @return string
         */
        public function __toString() : string {
            return "hsla(" . $this -> getHue() . ", " . $this -> getSaturation() . ", " . $this -> getLightness() . ", " . $this -> getAlpha() . ")";
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
            return new RGBAColor($this -> red, $this -> green, $this -> blue, $this -> alpha);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            // return new ...;
        }
    }
?>