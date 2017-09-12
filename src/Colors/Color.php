<?php
    namespace Chameleon\Colors;

    use Chameleon\Colors\RGBAColor;

    abstract class Color implements IColor {
        public static abstract function fromRGBA(RGBAColor $rgba);
        public abstract function getRGBA() : RGBAColor;
        public abstract function lighten(float $percentange) : IColor;
        public abstract function darken(float $percentange) : IColor;

        public function isTransparent() : bool {
            return $this -> getRGBA() -> getAlpha() == 127;
        }

        /**
         * Check if a value is in a legal range
         *
         * @param $value
         * @param $min
         * @param $max
         * @return void
         */
        protected function checkRange($value, $min, $max) {
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