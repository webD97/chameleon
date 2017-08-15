<?php
    namespace Chameleon\Colors;

    use \Chameleon\Exceptions\ValueOutOfBoundsException;

    class RGBColor extends Color {
        private $red;
        private $green;
        private $blue;

        public function __construct(int $red, int $green, int $blue) {
            $this -> setRed($red);
            $this -> setGreen($green);
            $this -> setBlue($blue);
        }

        public function __toString() : string {
            return "rgb(" . $this -> red . ", " . $this -> green . ", " . $this -> blue . ")";
        }

        public function getRed() : int {
            return $this -> red;
        }

        public function setRed(int $red) {
            if (!$this -> checkRange($red, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $red, 0, 255);
            }

            $this -> red = $red;
        }

        public function getGreen() : int {
            return $this -> green;
        }

        public function setGreen(int $green) {
            if (!$this -> checkRange($green, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $green, 0, 255);
            }
            
            $this -> green = $green;
        }

        public function getBlue() : int {
            return $this -> blue;
        }

        public function setBlue(int $blue) {
            if (!$this -> checkRange($blue, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $blue, 0, 255);
            }

            $this -> blue = $blue;
        }
    }
?>