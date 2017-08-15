<?php
    namespace Colors;

    require_once("Color.php");

    class RGBColor extends Color {
        private $red;
        private $green;
        private $blue;

        public function __construct(int $red, int $green, int $blue) {
            $this -> red = $red;
            $this -> green = $green;
            $this -> blue = $blue;
        }

        public function __toString() : string {
            return "rgb(" . $this -> red . ", " . $this -> green . ", " . $this -> blue . ")";
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