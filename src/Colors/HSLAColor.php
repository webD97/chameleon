<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\HSLColor;
    use Chameleon\Colors\RGBAColor;

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
         * @param int $hue
         * @param float $saturation
         * @param float $lightness
         * @param float|int $alpha RGB alpha channel value [0, 127]
         */
        public function __construct(int $hue, float $saturation, float $lightness, float $alpha) {
            parent::__construct($hue, $saturation, $lightness);
            $this -> setAlpha($alpha);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            $hsl = parent::fromRGBA($rgba);
            return new HSLAColor($hsl -> getHue(), $hsl -> getSaturation(), $hsl -> getLightness(), $rgba -> getAlpha() / 127);
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
         * @return float Alpha channel value [0, 1]
         */
        public function getAlpha() : float {
            return $this -> alpha;
        }

        /**
         * Set RGB alpha channel value
         *
         * @param float $alpha Alpha channel value [0, 1]
         *
         * @return HSLAColor
         * @throws ValueOutOfBoundsException
         */
        public function setAlpha(float $alpha) : self {
            if (!$this -> checkRange($alpha, 0, 1)) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 1);
            }
            
            $this -> alpha = $alpha;

            return $this;
        }

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, $this -> alpha * 127);
        }
    }
?>