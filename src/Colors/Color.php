<?php
    namespace Chameleon\Colors;

    use Chameleon\Colors\RGBAColor;

    abstract class Color implements IColor {
        public static abstract function fromRGBA(RGBAColor $rgba);
        public abstract function getRGBA() : RGBAColor;
        public abstract function lighten(float $percentange) : IColor;
        public abstract function darken(float $percentange) : IColor;
        public abstract function __toString(): string;

        public function isTransparent() : bool {
            return $this -> getRGBA() -> getAlpha() == 127;
        }

        /**
         * Check if a value is in a legal range
         *
         * @param int $value
         * @param int $min
         * @param int $max
         *
         * @return bool
         */
        protected function checkRange(int $value, int $min, int $max) : bool {
            return $value >= $min && $value <= $max;
        }

        /**
         * Convert a color to another color system
         *
         * @param string $class The new color's class name, e.g. HSLColor::class
         * @return IColor|null New color object or null if $class is not a Chameleon\Colors\IColor
         */
        public function convertTo(string $class) : ?IColor {
            if (in_array(IColor::class, class_implements($class))) {
                return $class::fromRGBA($this -> getRGBA());
            }

            return null;
        }
    }
?>