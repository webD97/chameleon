<?php
    namespace Chameleon\Colors;

    abstract class Color implements IColor {
        public abstract function getRed() : int;
        public abstract function getGreen() : int;
        public abstract function getBlue() : int;

        protected function checkRange($value, $min, $max) {
            return $value >= $min && $value <= $max;
        }
    }
?>