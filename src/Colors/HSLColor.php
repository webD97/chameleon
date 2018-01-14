<?php
    namespace Chameleon\Colors;

    use Chameleon\Exceptions\ValueOutOfBoundsException;

    /**
     * Class HSLColor
     *
     * Represents a color in the HSL system. No alpha channel!
     *
     * @api
     *
     * @package Chameleon\Colors
    */
    class HSLColor extends Color {
        /**
         * @var int Hue value
         */
        private $hue;

        /**
         * @var float Saturation value
         */
        private $saturation;

        /**
         * @var float Lightness value
         */
        private $lightness;

        /**
         * Class constructor
         *
         * @api
         *
         * @param int $hue Hue value [0, 359]
         * @param float $saturation Saturation value [0, 1]
         * @param float $lightness Lightness value [0, 1]
         */
        public function __construct(int $hue, float $saturation, float $lightness) {
            $this -> setHue($hue % 360);
            $this -> setSaturation($saturation);
            $this -> setLightness($lightness);
        }

        /**
         * {@inheritdoc}
         */
        public static function fromRGBA(RGBAColor $rgba) {
            // http://www.geekymonkey.com/Programming/CSharp/RGB2HSL_HSL2RGB.htm
            $red = $rgba -> getRed() / 255;
            $green = $rgba -> getGreen() / 255;
            $blue = $rgba -> getBlue() / 255;

            $maxOfAll = max($red, $green, $blue);
            $minOfAll = min($red, $green, $blue);
            $deltaMaxMin = $maxOfAll - $minOfAll;

            $red2 = ($maxOfAll - $red) / $deltaMaxMin;
            $green2 = ($maxOfAll - $green) / $deltaMaxMin;
            $blue2 = ($maxOfAll - $blue) / $deltaMaxMin;

            // Calculate lightness
            $lightness = ($minOfAll + $maxOfAll) / 2;

            // No lightness -> black
            if ($lightness == 0) {
                return new HSLColor(0, 0, 0);
            }

            // Calculate saturation
            $saturation = $deltaMaxMin / (($lightness <= 0.5) ? ($maxOfAll + $minOfAll) : (2 - $maxOfAll - $minOfAll));

            // No saturation -> grey
            if ($saturation == 0) {
                return new HSLColor(0, 0, $lightness);
            }

            // Calculate hue
            $hue = 60;
            switch ($maxOfAll) {
                case $red:
                    $hue *= ($green == $minOfAll) ? 5 + $blue2 : 1 - $green2;
                    break;
                case $green:
                    $hue *= ($blue == $minOfAll) ? 1 + $red2 : 3 - $blue2;
                    break;
                case $blue:
                    $hue *= ($red == $minOfAll) ? 3 + $green2 : 5 - $red2;
            }

            return new HSLColor($hue, $saturation, $lightness);
        }

        public function __toString() : string {
            return sprintf("hsl(%d, %F, %F)", $this -> hue, $this -> saturation, $this -> lightness);
        }

        /**
        * Get hue value
         *
         * @api
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
         * @api
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

            return $this;
        }

        /**
         * Get saturation value
         *
         * @api
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
         * @api
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

            return $this;
        }

        /**
        * Get lightness
         *
         * @api
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
         * @api
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

            return $this;
        }

        /**
         * @internal
         *
         * @param $p
         * @param $q
         * @param $t
         *
         * @return float
         */
        private function hue2rgb($p, $q, $t) : float {
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

        /**
         * {@inheritdoc}
         */
        public function getRGBA() : RGBAColor {
            if ($this -> saturation == 0) {
                return new RGBAColor($this -> lightness, $this -> lightness, $this -> lightness, 0);
            }

            $hue = $this -> hue;
            $saturation = $this -> saturation;
            $lightness = $this -> lightness;

            $q = ($lightness < 0.5) ? ($lightness * (1 + $saturation)) : ($lightness + $saturation - $lightness * $saturation);
            $p = 2 * $lightness - $q;

            $red = round($this -> hue2rgb($p, $q, ($hue + 120) / 360));
            $green = round($this -> hue2rgb($p, $q, ($hue + 0) / 360));
            $blue = round($this -> hue2rgb($p, $q, ($hue - 120) / 360));

            return new RGBAColor($red, $green, $blue, 0);
        }

        /**
         * {@inheritdoc}
         */
        public function lighten(float $percentage) : IColor {
            $this -> lightness += $percentage;

            if ($this -> lightness > 1) {
                $this -> lightness = 1;
            }

            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function darken(float $percentage) : IColor {
            $this -> lightness -= $percentage;

            if ($this -> lightness < 0) {
                $this -> lightness = 0;
            }

            return $this;
        }
    }
?>