<?php
    namespace Chameleon\Colors;

    /**
    * Color Class for HSV colors
    *
    * Represents a color based on the HSV (hue, saturation, value) system
    * @api
    */
    class HSVColor extends Color {
        private $hue;
        private $saturation;
        private $value;

        private $red;
        private $green;
        private $blue;

        /**
        * Class constructor
        * @param int $hue Hue value [0, 360]
        */
        public function __construct(int $hue, float $saturation, float $value) {
            $this -> hue = $hue;
            $this -> saturation = $saturation;
            $this -> value = $value;

            $this -> makeRGB();
        }

        public function __toString() : string {
            return "hsv(" . $this -> hue . ", " . $this -> saturation . ", " . $this -> value . ")";
        }

        /**
        * Get hue value
        *
        * Returns the hue value of this color
        * @return int Hue value [0, 360]
        */
        public function getHue() : int {
            return $this -> hue;
        }

        /**
        * Set hue value
        *
        * Sets the hue value of this color
        * @param int $hue The hue value [0, 360]
        */
        public function setHue(int $hue) {
            $this -> hue = $hue;
        }

        /**
        * Get saturation value
        *
        * Returns the saturation value of this color
        * @return int saturation value [0, 1]
        */
        public function getSaturation() : int {
            return $this -> saturation;
        }

        /**
        * Set saturation value
        *
        * Sets the saturation value of this color
        * @param int $saturation The saturation value [0, 1]
        */
        public function setSaturation(int $saturation) {
            $this -> saturation = $saturation;
        }

        /**
        * Get value
        *
        * Returns the value of this color
        * @return int value [0, 1]
        */
        public function getValue() : int {
            return $this -> value;
        }

        /**
        * Set value
        *
        * Sets the value of this color
        * @param int $value The value [0, 1]
        */
        public function setValue(int $value) {
            $this -> value = $value;
        }


        /**
        * Set RGB equivalent
        * @param int $red Red value [0, 255]
        * @param int $red Red value [0, 255]
        * @param int $red Red value [0, 255]
        */
        private function setRGB($red, $green, $blue) {
            $this -> red = round($red * 255);
            $this -> green = round($green * 255);
            $this -> blue = round($blue * 255);
        }

        private function makeRGB() {
            $hi = floor($this -> hue / 60);
            $f = ($this -> hue / 60) - $hi;

            $p = $this -> value * (1 - $this -> saturation);
            $q = $this -> value * (1 - $this -> saturation * $f);
            $t = $this -> value * (1 - $this -> saturation * (1 - $f));

            switch ($hi) {
                case 0:
                case 6:
                    $this -> setRGB($this -> value, $t, $p);
                    break;
                case 1:
                    $this -> setRGB($q, $this -> value, $p);
                    break;
                case 2:
                    $this -> setRGB($p, $this -> value, $t);
                    break;
                case 3:
                    $this -> setRGB($p, $q, $this -> value);
                    break;
                case 4:
                    $this -> setRGB($t, $p, $this -> value);
                    break;
                case 5:
                    $this -> setRGB($this -> value, $p, $q);
                    break;
                
            }
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