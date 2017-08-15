<?php
    namespace Colors;

    interface IColor {
        public function getRed() : int;
        public function getGreen() : int;
        public function getBlue() : int;
    }
?>