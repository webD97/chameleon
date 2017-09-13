<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use Chameleon\Colors\IColor;

    interface IPattern {
        /**
         * Get color in this pattern at the given position
         *
         * @param int $x The x coordinate
         * @param int $y The y coordinate
         *
         * @return IColor The color at this position
         */
        public function getColorAt(int $x, int $y) : IColor;
    }
?>