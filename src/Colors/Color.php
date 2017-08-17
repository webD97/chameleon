<?php
    namespace Chameleon\Colors;

    abstract class Color implements IColor {
        public abstract function getRed() : int;
        public abstract function getGreen() : int;
        public abstract function getBlue() : int;
        public abstract function getAlpha() : int;

        /**
         * Get the hexadecimal representation of this color
         * 
         * Format: #rrggbb
         *
         * @return string
         */
        public function getHex() : string {
            return "#" . dechex($this -> getRed()) . dechex($this -> getGreen()) . dechex($this -> getBlue()) . dechex($this -> getAlpha());
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