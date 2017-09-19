<?php
    namespace Chameleon\Colors;

    abstract class Color implements IColor {
        /**
         * {@inheritdoc}
         */
        public static abstract function fromRGBA(RGBAColor $rgba);

        /**
         * {@inheritdoc}
         */
        public abstract function getRGBA() : RGBAColor;

        /**
         * {@inheritdoc}
         */
        public abstract function lighten(float $percentage) : IColor;

        /**
         * {@inheritdoc}
         */
        public abstract function darken(float $percentage) : IColor;

        /**
         * {@inheritdoc}
         */
        public abstract function __toString(): string;

        /**
         * {@inheritdoc}
         */
        public final function getInt(): int {
            $rgba = $this -> getRGBA();

            $colorId = 0;
            $colorId |= $rgba -> getAlpha();
            $colorId <<= 8;
            $colorId |= $rgba -> getRed();
            $colorId <<= 8;
            $colorId |= $rgba -> getGreen();
            $colorId <<= 8;
            $colorId |= $rgba -> getBlue();

            return $colorId;
        }

        /**
         * Check if a value is in a legal range.
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
         * Convert a color to another color system.
         *
         * @api
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