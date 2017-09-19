<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use SplFixedArray;
    use Chameleon\Colors\IColor;

    abstract class Pattern extends SplFixedArray implements IPattern {
        public abstract function getColorAt(int $xCoordinate, int $yCoordinate): IColor;

        /**
         * Pattern constructor.
         *
         * @param int $colors Number of colors used in this pattern
         */
        public function __construct(int $colors) {
            parent::__construct($colors);
        }

        /**
         * Set color at index.
         *
         * @param int $index index
         * @param IColor $color color
         */
        protected function setColor(int $index, IColor $color) {
            $this -> offsetSet($index, $color);
        }

        /**
         * Get color at index
         *
         * @param int $index index
         *
         * @return IColor color
         */
        protected function getColor(int $index) : IColor {
            return $this -> offsetGet($index);
        }
    }
?>