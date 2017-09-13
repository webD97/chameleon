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
                $this -> setColor($i, new RGBAColor(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), $alpha));
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