<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use Chameleon\Colors\IColor;
    use Chameleon\Colors\RGBAColor;

    class RGBNoise extends Pattern {
        /**
         * Pattern constructor
         *
         * @param int $colors Number of colors to be generated
         * @param int $alpha Optional alpha channel value for the colors
         */
        public function __construct(int $colors, int $alpha = 0) {
            parent::__construct($colors);

            for ($i = 0; $i < $colors; $i++) {
                $randomInt = mt_rand(0, pow(2, 24) - 1);

                $red = $randomInt >> 16 & 0b000000000000000011111111;
                $green = $randomInt >> 8 & 0b000000000000000011111111;
                $blue = $randomInt >> 0 & 0b000000000000000011111111;

                $this -> setColor($i, new RGBAColor($red, $green, $blue, $alpha));
            }
        }

        /**
         * Get a random color for the position.
         *
         * @param int $x x coordinate
         * @param int $y y coordinate
         * @return IColor The color for the given position
         */
        public function getColorAt(int $x, int $y) : IColor {
            return $this -> getColor(mt_rand(0, $this -> getSize() - 1));
        }
    }
?>
