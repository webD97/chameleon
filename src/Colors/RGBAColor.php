<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBColor;

    class RGBAColor extends RGBColor {
        /**
         * Alpha channel max value.
         */
        public const ALPHA_MAX = 127;

        /**
         * The alpha channel value [0, {@see self::ALPHA_MAX}]
         *
         * @var float
         */
        private $alpha;

        /**
         * Class constructor
         *
         * @param int $red RGB red channel value [0, {@see RGBColor::RED_MAX}]
         * @param int $green RGB green channel value [0, {@see RGBColor::GREEN_MAX}]
         * @param int $blue RGB blue channel value [0, {@see RGBColor::BLUE_MAX}]
         * @param float $alpha RGB alpha channel value [0, 1]
         */
        public function __construct(int $red, int $green, int $blue, float $alpha) {
            parent::__construct($red, $green, $blue);
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
            return sprintf("rgba(%d, %d, %d, %F)", $this -> getRed(), $this -> getGreen(), $this -> getBlue(), $this -> alpha);
        }

        /**
         * Get RGB alpha channel value
         *
         * @return int RGB alpha channel value [0, {@see RGBAColor::ALPHA_MAX}]
         */
        public function getAlpha() : int {
            return round($this -> alpha * self::ALPHA_MAX);
        }

        /**
         * Set RGB alpha channel value
         *
         * @param float $alpha RGB alpha channel value [0, 1]
         *
         * @return RGBAColor
         * @throws ValueOutOfBoundsException
         */
        public function setAlpha(float $alpha) : self {
            if (!$this -> checkRange($alpha, 0, 1)) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 1);
            }

            $this -> alpha = $alpha;

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function getRGBA() : RGBAColor {
            return clone $this;
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) {
            return new RGBAColor($rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue(), $rgba -> alpha);
        }
    }
?>