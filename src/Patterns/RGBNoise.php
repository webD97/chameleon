<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use \SplFixedArray;
    use Chameleon\ColorFactory;
    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;
    use \Chameleon\Colors\RGBAColor;
    use Chameleon\Patterns\IPattern;

    class RGBNoise implements IPattern {
        private $colors;

        /**
         * Class constructor
         *
         * @param int $colors Number of colors to be generated
         * @param int $alpha Optional alpha channel value for the colors
         */
        public function __construct(int $colors, int $alpha = 0) {
            $this -> colors = new SplFixedArray($colors);

            for ($i = 0; $i < $colors; $i++) {
                $this -> colors -> offsetSet($i, new RGBAColor(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), $alpha));
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
            return $this -> colors -> offsetGet(mt_rand(0, $this -> colors -> getSize() - 1));
        }

        /**
         * Get all colors used by this pattern
         *
         * @return SplFixedArray Fixed array of RGBAColor
         */
        public function getColors() : SplFixedArray {
            return $this -> colors;
        }
    }
?>