<?php
    namespace Chameleon\Colors;

    use \Chameleon\Exceptions\ValueOutOfBoundsException;
    use \Chameleon\Colors\RGBAColor;

    class RGBColor extends Color {
        /**
         * The red channel value [0, 255]
         *
         * @var int
         */
        protected $red;

        /**
         * The green channel value [0, 255]
         *
         * @var int
         */
        protected $green;

        /**
         * The blue channel value [0, 255]
         *
         * @var int
         */
        protected $blue;

        /**
         * Class constructor
         *
         * @param int $red The red channel value [0, 255]
         * @param int $green The green channel value [0, 255]
         * @param int $blue The blue channel value [0, 255]
         */
        public function __construct(int $red, int $green, int $blue) {
            $this -> setRed($red);
            $this -> setGreen($green);
            $this -> setBlue($blue);
        }

        /**
         * Get string representation of this color
         * 
         * Format: rgb(red, green, blue)
         *
         * @return string
         */
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

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new RGBColor($rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue());
        }
    }
?>