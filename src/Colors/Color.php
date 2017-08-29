<?php
    namespace Chameleon\Colors;

    use Chameleon\Colors\RGBAColor;

    abstract class Color implements IColor {
        public abstract function getRGBA() : RGBAColor;
        public static abstract function fromRGBA(RGBAColor $rgba);

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
    }
?>