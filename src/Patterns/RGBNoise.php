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
         * @param float $alpha Optional alpha channel value for the colors [0, 1]
         */
        public function __construct(int $colors, float $alpha = 0) {
            parent::__construct($colors);

            for ($index = 0; $index < $colors; $index++) {
                $randomInt = mt_rand(0, pow(2, 24) - 1);

                $red = $randomInt >> 16 & 255;
                $green = $randomInt >> 8 & 255;
                $blue = $randomInt >> 0 & 255;

                $this -> setColor($index, new RGBAColor($red, $green, $blue, $alpha));
            }
        }

        /**
         * Get a random color for the position.
         *
         * @param int $xCoordinate x coordinate
         * @param int $yCoordinate y coordinate
         *
         * @return IColor The color for the given position
         */
        public function getColorAt(int $xCoordinate, int $yCoordinate) : IColor {
            return $this -> getColor(mt_rand(0, $this -> getSize() - 1));
        }
    }
?>
