<?php
    namespace Chameleon\Colors;

    use \Chameleon\Exceptions\ValueOutOfBoundsException;

    class Hex6Color extends Color {
        /**
         * The red channel value [0, 255]
         *
         * @var int
         */
        private $red;

        /**
         * The green channel value [0, 255]
         *
         * @var int
         */
        private $green;

        /**
         * The blue channel value [0, 255]
         *
         * @var int
         */
        private $blue;

        /**
         * Class constructor
         *
         * @param string $hexstring The 6-digit hexstring, e.g. #fe0da7
         */
        public function __construct(string $hexstring) {
            $this -> setHex($hexstring);
        }

        /**
         * Get string representation of this color
         * 
         * Format: #rrggbb
         *
         * @return string
         */
        public function __toString() : string {
            return $this -> getHex();
        }

        /**
         * Get hexadecimal value for this color
         * Format: #rrggbb
         *
         * @return string
         */
        public function getHex() : string {
            return strtoupper("#" . dechex($this -> red) . dechex($this -> green) . dechex($this -> blue));
        }

        /**
         * Set hexadecimal value for this color
         *
         * @param string $hexstring The hexadecimal color value, Fomat: #rrggbb
         * @return void
         */
        public function setHex(string $hexstring) {
            $hexstring = str_replace("#", "", $hexstring);
            $this -> setRed(hexdec(substr($hexstring, 0, 2)));
            $this -> setGreen(hexdec(substr($hexstring, 2, 2)));
            $this -> setBlue(hexdec(substr($hexstring, 4, 2)));
        }

        public function getRed() : int {
            return $this -> red;
        }

        public function setRed(int $red) {
            if (!$this -> checkRange($red, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $red, 0x00, 0xFF);
            }

            $this -> red = $red;
        }

        public function getGreen() : int {
            return $this -> green;
        }

        public function setGreen(int $green) {
            if (!$this -> checkRange($green, 0, 255)) {
                throw new ValueOutOfBoundsException("green", $green, 0x00, 0xFF);
            }
            
            $this -> green = $green;
        }

        public function getBlue() : int {
            return $this -> blue;
        }

        public function setBlue(int $blue) {
            if (!$this -> checkRange($blue, 0, 255)) {
                throw new ValueOutOfBoundsException("blue", $blue, 0x00, 0xFF);
            }

            $this -> blue = $blue;
        }

        public function getAlpha() : int {
            return 0x00;
        }
    }
?>