<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Colors\RGBAColor;
    use Guzzle\Http\RedirectPlugin;

    /**
     * Color Class for HSV colors
     *
     * Represents a color based on the HSV (hue, saturation, value) system
     *
     * @api
     *
     * @package Chameleon\Colors
     */
    class HSVColor extends Color {
        /**
         * @var int Hue value
         */
        private $hue;

        /**
         * @var float Saturation value
         */
        private $saturation;

        /**
         * @var float Value value
         */
        private $value;

        /**
         * @var int Red
         * @deprecated
         */
        protected $red;

        /**
         * @var int Red
         * @deprecated
         */
        protected $green;

        /**
         * @var int Red
         * @deprecated
         */
        protected $blue;

        /**
         * Class constructor
         *
         * @api
         *
         * @param int $hue Hue value [0, 359]
         * @param float $saturation Saturation [0, 1]
         * @param float $value Value [0, 1]
         */
        public function __construct(int $hue, float $saturation, float $value) {
            $this -> setHue($hue);
            $this -> setSaturation($saturation);
            $this -> setValue($value);
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) : HSVColor {
            // https://stackoverflow.com/a/6930407
            $red = $rgba -> getRed() / 255;
            $green = $rgba -> getGreen() / 255;
            $blue = $rgba -> getBlue() / 255;
            
            $minOfAll = min($red, $green, $blue);
            $maxOfAll = max($red, $green, $blue);

            $hue = 0;
            $saturation = 0;
            $value = round($maxOfAll, 2);

            $deltaMaxMin = $maxOfAll - $minOfAll;

            if ($deltaMaxMin == 0) {
                return new HSVColor($hue, $saturation, $value);
            }

            $saturation = $deltaMaxMin / $maxOfAll;

            if ($maxOfAll <= 0) {
                return new HSVColor($hue, $saturation, $value);
            }
            
            if($red == $maxOfAll) {
                $hue = ($green - $blue) / $deltaMaxMin;
            }
            elseif ($green == $maxOfAll) {
                $hue = 2 + ($blue - $red) / $deltaMaxMin;
            }
            elseif ($blue == $maxOfAll) {
                $hue = 4 + ($red - $green) / $deltaMaxMin;
            }
    
            $hue *= 60;
    
            if($hue < 0) {
                $hue += 360;
            }
    
            return new HSVColor($hue, $saturation, $value);         
        }

        /**
         * {@inheritdoc}
         */
        public function __toString() : string {
            return sprintf("hsv(%d, %F, %F)", $this -> hue, $this -> saturation, $this -> value);
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
         * @return HSVColor
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
         * @return HSVColor
         * @throws ValueOutOfBoundsException
         */
        public function setSaturation(float $saturation) : self {
            if (!$this -> checkRange($saturation, 0, 1)) {
                throw new ValueOutOfBoundsException("saturation", $saturation, 0, 1);
            }

            $this -> saturation = $saturation;
            $this -> makeRGB();

            return $this;
        }

        /**
        * Get value
        *
        * Returns the value of this color
        * @return float value [0, 1]
        */
        public function getValue() : float {
            return $this -> value;
        }

        /**
         * Set value
         *
         * Sets the value of this color
         *
         * @param float|int $value The value [0, 1]
         *
         * @return HSVColor
         * @throws ValueOutOfBoundsException
         */
        public function setValue(float $value) : self {
            if (!$this -> checkRange($value, 0, 1)) {
                throw new ValueOutOfBoundsException("value", $value, 0, 1);
            }

            $this -> value = $value;
            $this -> makeRGB();

            return $this;
        }

        /**
        * Set RGB equivalent
         *
         * @internal
         *
        * @param int $red Red value [0, 255]
        * @param int $green Green value [0, 255]
        * @param int $blue Blue value [0, 255]
        */
        private function setRGB($red, $green, $blue) {
            $this -> red = round($red * 255);
            $this -> green = round($green * 255);
            $this -> blue = round($blue * 255);
        }

        /**
         * Calculate RGB equivalent
         *
         * @internal
         */
        private function makeRGB() : void {
            $hueSector = intdiv($this -> hue, 60);
            $f = ($this -> hue / 60) - $hueSector;

            $p = $this -> value * (1 - $this -> saturation);
            $q = $this -> value * (1 - $this -> saturation * $f);
            $t = $this -> value * (1 - $this -> saturation * (1 - $f));

            switch ($hueSector) {
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

        /**
         * {@inheritdoc}
         */
        public function getRGBA() : RGBAColor {
            return new RGBAColor($this -> red, $this -> green, $this -> blue, 0);
        }

        /**
         * {@inheritdoc}
         */
        public function lighten(float $percentage) : IColor {
            $this -> value += $percentage;

            if ($this -> value > 1) {
                $this -> value = 1;
            }

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function darken(float $percentage) : IColor {
            $this -> value -= $percentage;

            if ($this -> value < 0) {
                $this -> value = 0;
            }

            return $this;
        }
    }
?>