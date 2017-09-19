<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use Chameleon\Colors\IColor;

    /**
     * BackgroundColor represents a plain unicolor background, equivalent to background-color in CSS
     */
    class BackgroundColor extends Pattern {
        public function __construct(IColor $color) {
            parent::__construct(1);
            $this -> setColor(0, $color);
        }

        public function getColorAt(int $xCoordinate, int $yCoordinate) : IColor {
            return parent::getColor(0);
        }
    }
?>