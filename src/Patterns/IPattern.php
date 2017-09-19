<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use Chameleon\Colors\IColor;

    interface IPattern {
        /**
         * Get color in this pattern at the given position
         *
         * @param int $xCoordinate The x coordinate
         * @param int $yCoordinate The y coordinate
         *
         * @return IColor The color at this position
         */
        public function getColorAt(int $xCoordinate, int $yCoordinate) : IColor;
    }
?>