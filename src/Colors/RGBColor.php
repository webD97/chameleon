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

        /**
         * Get red channel value
         *
         * @return int The value [0, 255]
         */
        public function getRed() : int {
            return $this -> red;
        }

        /**
         * Set the red channel value
         *
         * @param int $red The value [0, 255]
         * @return self
         */
        public function setRed(int $red) : self {
            if (!$this -> checkRange($red, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $red, 0, 255);
            }

            $this -> red = $red;

            return $this;
        }

        /**
         * Get green channel value
         *
         * @return int The value [0, 255]
         */
        public function getGreen() : int {
            return $this -> green;
        }

        /**
         * Set green channel value
         *
         * @param int $green The value [0, 255]
         * @return self
         */
        public function setGreen(int $green) {
            if (!$this -> checkRange($green, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $green, 0, 255);
            }
            
            $this -> green = $green;

            return $this;
        }

        /**
         * Get blue channel value
         *
         * @return int The value [0, 255]
         */
        public function getBlue() : int {
            return $this -> blue;
        }

        /**
         * Set blue channel value
         *
         * @param int $blue The value [0, 255]
         * @return int self
         */
        public function setBlue(int $blue) {
            if (!$this -> checkRange($blue, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $blue, 0, 255);
            }

            $this -> blue = $blue;

            return $this;
        }

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new RGBColor($rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue());
        }
    }
?>