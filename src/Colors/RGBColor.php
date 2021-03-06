<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;

    /**
     * Class RGBColor
     *
     * The RGBColor class represents a color in the RGB system (24b color depth). No alpha channel!
     *
     * @api
     *
     * @package Chameleon\Colors
     */
    class RGBColor extends Color {
        /**
         * Red channel max value.
         */
        public const RED_MAX = 255;

        /**
         * Green channel max value.
         */
        public const GREEN_MAX = 255;

        /**
         * Blue channel max value.
         */
        public const BLUE_MAX = 255;

        /**
         * The red channel value [0, {@see RGBColor::RED_MAX}]
         *
         * @var int
         */
        protected $red;

        /**
         * The green channel value [0, {@see RGBColor::GREEN_MAX}]
         *
         * @var int
         */
        protected $green;

        /**
         * The blue channel value [0, {@see RGBColor::BLUE_MAX}]
         *
         * @var int
         */
        protected $blue;

        /**
         * Class constructor
         *
         * @param int $red The red channel value [0, {@see RGBColor::RED_MAX}]
         * @param int $green The green channel value [0, {@see RGBColor::GREEN_MAX}]
         * @param int $blue The blue channel value [0, {@see RGBColor::BLUE_MAX}]
         */
        public function __construct(int $red, int $green, int $blue) {
            $this -> setRed($red);
            $this -> setGreen($green);
            $this -> setBlue($blue);
        }

        /**
         * Get string representation of this color
         * 
         * Format: rgb(red, green, blue)
         *
         * @return string
         */
        public function __toString() : string {
            return sprintf("rgb(%d, %d, %d)", $this -> red, $this -> green, $this -> blue);
        }

        /**
         * Get red channel value
         *
         * @return int The value [0, {@see RGBColor::RED_MAX}]
         */
        public function getRed() : int {
            return $this -> red;
        }

        /**
         * Set the red channel value
         *
         * @param int $red The value [0, {@see RGBColor::RED_MAX}]
         *
         * @return RGBColor
         * @throws ValueOutOfBoundsException
         */
        public function setRed(int $red) : self {
            if (!$this -> checkRange($red, 0, self::RED_MAX)) {
                throw new ValueOutOfBoundsException("red", $red, 0, self::RED_MAX);
            }

            $this -> red = $red;

            return $this;
        }

        /**
         * Get green channel value
         *
         * @return int The value [0, {@see RGBColor::GREEN_MAX}]
         */
        public function getGreen() : int {
            return $this -> green;
        }

        /**
         * Set green channel value
         *
         * @param int $green The value [0, {@see RGBColor::GREEN_MAX}]
         *
         * @return RGBColor
         * @throws ValueOutOfBoundsException
         */
        public function setGreen(int $green) {
            if (!$this -> checkRange($green, 0, self::GREEN_MAX)) {
                throw new ValueOutOfBoundsException("red", $green, 0, self::GREEN_MAX);
            }
            
            $this -> green = $green;

            return $this;
        }

        /**
         * Get blue channel value
         *
         * @return int The value [0, {@see RGBColor::BLUE_MAX}]
         */
        public function getBlue() : int {
            return $this -> blue;
        }

        /**
         * Set blue channel value
         *
         * @param int $blue The value [0, {@see RGBColor::BLUE_MAX}]
         *
         * @return self
         * @throws ValueOutOfBoundsException
         */
        public function setBlue(int $blue) {
            if (!$this -> checkRange($blue, 0, self::BLUE_MAX)) {
                throw new ValueOutOfBoundsException("red", $blue, 0, self::BLUE_MAX);
            }

            $this -> blue = $blue;

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) {
            return new RGBColor($rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue());
        }

        /**
         * {@inheritdoc}
         */
        public function lighten(float $percentage) : IColor {
            $this -> red += $this -> red * $percentage;
            $this -> green += $this -> green *  $percentage;
            $this -> blue += $this -> blue * $percentage;

            $threshold = 255;
            $max = max($this -> red, $this -> green, $this -> blue);

            if ($max <= $threshold) {
                return $this;
            }

            $total = $this -> red + $this -> green + $this -> blue;

            if ($total >= 3 * $threshold) {
                $this -> red = $threshold;
                $this -> green = $threshold;
                $this -> blue = $threshold;
                return $this;
            }

            $x = (3 * $threshold - $total) / (3 * $max - $total);
            $gray = $threshold - $x * $max;

            $this -> red = $gray + $x * $this -> red;
            $this -> green = $gray + $x * $this -> green;
            $this -> blue = $gray + $x * $this -> blue;

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function darken(float $percentage) : IColor {
            $this -> red -= (255 - $this -> red) * $percentage;
            $this -> green -= (255 - $this -> green) *  $percentage;
            $this -> blue -= (255 - $this -> blue) * $percentage;

            $threshold = 0;
            $min = min($this -> red, $this -> green, $this -> blue);

            if ($min >= $threshold) {
                return $this;
            }

            $total = $this -> red + $this -> green + $this -> blue;

            if ($total <= 3 * $threshold) {
                $this -> red = $threshold;
                $this -> green = $threshold;
                $this -> blue = $threshold;
                return $this;
            }

            $x = (3 * $threshold - $total) / (3 * $min - $total);
            $gray = $threshold - $x * $min;

            $this -> red = $gray + $x * $this -> red;
            $this -> green = $gray + $x * $this -> green;
            $this -> blue = $gray + $x * $this -> blue;

            return $this;
        }
    }
?>