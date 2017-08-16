<?php
    namespace Chameleon\Colors;

    interface IColor {
        /**
         * Get the RGB red channel value
         *
         * @return int
         */
        public function getRed() : int;
        
        /**
         * Get the RGB green channel value
         *
         * @return int
         */
        public function getGreen() : int;

        /**
         * Get the RGB yellow channel value
         *
         * @return int
         */
        public function getBlue() : int;

        public function getHex() : string;
    }
?>