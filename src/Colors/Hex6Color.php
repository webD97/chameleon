<?php
    namespace Chameleon\Colors;

    use \Chameleon\Exceptions\ValueOutOfBoundsException;
    use \Chameleon\Colors\RGBAColor;

    class Hex6Color extends Color {
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

        /**
         * Get RGB red channel
         *
         * @return int The value [0x00, 0xFF]
         */
        public function getRed() : int {
            return $this -> red;
        }

        /**
         * Set RGB red channel
         *
         * @param int $red The value [0x00, 0xFF]
         * @return self
         */
        public function setRed(int $red) : self {
            if (!$this -> checkRange($red, 0, 255)) {
                throw new ValueOutOfBoundsException("red", $red, 0x00, 0xFF);
            }

            $this -> red = $red;

            return $this;
        }

        /**
         * Get RGB green channel
         *
         * @return int The value [0x00, 0xFF]
         */
        public function getGreen() : int {
            return $this -> green;
        }

        /**
         * Set RGB green channel
         *
         * @param int $green The value [0x00, 0xFF]
         * @return self
         */
        public function setGreen(int $green) {
            if (!$this -> checkRange($green, 0, 255)) {
                throw new ValueOutOfBoundsException("green", $green, 0x00, 0xFF);
            }
            
            $this -> green = $green;
        }

        /**
         * Get RGB blue channel
         *
         * @return int The value [0x00, 0xFF]
         */
        public function getBlue() : int {
            return $this -> blue;
        }

        /**
         * Set RGB blue channel
         *
         * @param int $blue The value [0x00, 0xFF]
         * @return self
         */
        public function setBlue(int $blue) {
            if (!$this -> checkRange($blue, 0, 255)) {
                throw new ValueOutOfBoundsException("blue", $blue, 0x00, 0xFF);
            }

            $this -> blue = $blue;
        }

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        public static function fromRGBA(RGBAColor $rgba) {
            return new Hex6Color("#" . 
                dechex($rgba -> getRed()) .
                dechex($rgba -> getGreen()) .
                dechex($rgba -> getBlue())
            );
        }
    }
?>