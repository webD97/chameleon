<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBAColor;

    /**
    * Color Class for HSL colors
    *
    * Represents a color based on the HSL (hue, saturation, value) system
    * @api
    */
    class HSLColor extends Color {
        private $hue;
        private $saturation;
        private $lightness;

        protected $red;
        protected $green;
        protected $blue;

        /**
        * Class constructor
        * @param int $hue Hue value [0, 359]
        */
        public function __construct(int $hue, float $saturation, float $lightness) {
            $this -> setHue($hue);
            $this -> setSaturation($saturation);
            $this -> setLightness($lightness);
        }

        /**
         * @param \Chameleon\Colors\RGBAColor $rgba
         *
         * @return HSLColor
         */
        public static function fromRGBA(RGBAColor $rgba) {
            // http://www.geekymonkey.com/Programming/CSharp/RGB2HSL_HSL2RGB.htm
            $red = $rgba -> getRed() / 255;
            $green = $rgba -> getGreen() / 255;
            $blue = $rgba -> getBlue() / 255;
    
            $hue = 0;
            $saturation = 0;
            $lightness = 0;
            
            $max = max($red, $green, $blue);
            $min = min($red, $green, $blue);
            $delta = $max - $min;
            
            $lightness = round(($min + $max) / 2, 2);

            if ($lightness <= 0) {
                  return new HSLColor($hue, $saturation, $lightness);
            }


            $saturation = $delta;
            if ($saturation > 0) {
                $saturation /= ($lightness <= 0.5) ? ($max + $min) : (2 - $delta);
                $saturation = round($saturation, 2);
            }
            else {
                  return new HSLColor($hue, $saturation, $lightness);
            }
            
            $red2 = ($max - $red) / $delta;
            $green2 = ($max - $green) / $delta;
            $blue2 = ($max - $blue) / $delta;
            
            if ($red == $max) {
                $hue = ($green == $min) ? 5 + $blue2 : 1 - $green2;
            }
            elseif ($green == $max) {
                $hue = ($blue == $min) ? 1 + $red2 : 3 - $blue2;
            }
            else {
                $hue = ($red == $min) ? 3 + $green2 : 5 - $red2;
            }
            
            $hue *= 60;

            return new HSLColor($hue, $saturation, $lightness);
        }

        public function __toString() : string {
            return "hsl(" . $this -> hue . ", " . $this -> saturation . ", " . $this -> lightness . ")";
        }

        /**
        * Get hue value
        *
        * Returns the hue value of this color
        * @return int Hue value [0, 359]
        */
        public function getHue() : int {
            return $this -> hue;
        }

        /**
         * Set hue value
         *
         * Sets the hue value of this color
         *
         * @param int $hue The hue value [0, 359]
         *
         * @return HSLColor
         * @throws ValueOutOfBoundsException
         */
        public function setHue(int $hue) : self {
            if (!$this -> checkRange($hue, 0, 359)) {
                throw new ValueOutOfBoundsException("hue", $hue, 0, 359);
            }

            $this -> hue = $hue;
            $this -> makeRGB();

            return $this;
        }

        /**
         * Get saturation value
         *
         * Returns the saturation value of this color
         * @return float saturation value [0, 1]
         */
        public function getSaturation() : float {
            return $this -> saturation;
        }

        /**
         * Set saturation value
         *
         * Sets the saturation value of this color
         *
         * @param float|int $saturation The saturation value [0, 1]
         *
         * @return HSLColor
         * @throws ValueOutOfBoundsException
         */
        public function setSaturation(float $saturation) : self{
            if (!$this -> checkRange($saturation, 0, 1)) {
                throw new ValueOutOfBoundsException("saturation", $saturation, 0, 1);
            }

            $this -> saturation = $saturation;
            $this -> makeRGB();

            return $this;
        }

        /**
        * Get lightness
        *
        * Returns the lightness of this color
        * @return float lightness [0, 1]
        */
        public function getLightness() : float {
            return $this -> lightness;
        }

        /**
         * Set lightness
         *
         * Sets the lightness of this color
         *
         * @param float|int $lightness The lightness [0, 1]
         *
         * @return HSLColor
         * @throws ValueOutOfBoundsException
         */
        public function setLightness(float $lightness) : self {
            if (!$this -> checkRange($lightness, 0, 1)) {
                throw new ValueOutOfBoundsException("lightness", $lightness, 0, 1);
            }

            $this -> lightness = $lightness;
            $this -> makeRGB();

            return $this;
        }

        private function makeRGB() {
            $hue = $this -> hue;
            $saturation = $this -> saturation;
            $lightness = $this -> lightness;
            
            if($saturation == 0){
                $this -> red = $this -> green = $this -> blue = $lightness;
                return;
            }

            $q = ($lightness < 0.5) ? $lightness * (1 + $saturation) : $lightness + $saturation - $lightness * $saturation;
            $p = 2 * $lightness - $q;

            $this -> red = round($this -> hue2rgb($p, $q, ($hue + 120) / 360));
            $this -> green = round($this -> hue2rgb($p, $q, ($hue) / 360));
            $this -> blue = round($this -> hue2rgb($p, $q, ($hue - 120) / 360));
        }
        
        private function hue2rgb($p, $q, $t){
            if ($t < 0) {
                $t += 1;
            }
            if ($t > 1) {
                $t -= 1;
            }
            
            if ($t < 1/6) {
                return ($p + ($q - $p) * 6 * $t) * 255;
            }
            if ($t < 1/2) {
                return $q * 255;
            }
            if ($t < 2/3) {
                return ($p + ($q - $p) * (2/3 - $t) * 6) * 255;
            }

            return $p * 255;
        }

        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        public function lighten(float $percentage) : IColor {
            $this -> lightness += $percentage;

            if ($this -> lightness > 1) {
                $this -> lightness = 1;
            }

            return $this;
        }

        public function darken(float $percentage) : IColor {
            $this -> lightness -= $percentage;

            if ($this -> lightness < 0) {
                $this -> lightness = 0;
            }

            return $this;
        }
    }
?>