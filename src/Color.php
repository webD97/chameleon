<?php
    class Color {
        private $red;
        private $green;
        private $blue;

        public static function fromRGB(int $red, int $green, int $blue) {
            $color = new Color();
            $color -> red = $red;
            $color -> green = $green;
            $color -> blue = $blue;

            return $color;
        }

        public static function fromHex(string $hex) {

        }

        public static function fromHSL(int $h, int $s, int $l) {

        }

        public function getRed() : int {
            return $this -> red;
        }

        public function getGreen() : int {
            return $this -> green;
        }

        public function getBlue() : int {
            return $this -> blue;
        }
    }
?>