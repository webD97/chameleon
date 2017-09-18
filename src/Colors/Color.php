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
         * {@inheritdoc}
         */
        public final function getInt(): int {
            $rgba = $this -> getRGBA();

            $id = 0;
            $id |= $rgba -> getAlpha();
            $id <<= 8;
            $id |= $rgba -> getRed();
            $id <<= 8;
            $id |= $rgba -> getGreen();
            $id <<= 8;
            $id |= $rgba -> getBlue();

            return $id;
        }

        /**
         * Check if a value is in a legal range
         *
         * @param float $value
         * @param float $min
         * @param float $max
         *
         * @return bool
         */
        protected function checkRange(float $value, float $min, float $max) : bool {
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