<?php
    namespace Chameleon\Colors;

    interface IColor {
        public function getRed() : int;
        public function getGreen() : int;
        public function getBlue() : int;
    }
?>