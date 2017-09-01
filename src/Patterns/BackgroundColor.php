<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use SplFixedArray;
    use Chameleon\Colors\IColor;

    /**
     * BackgroundColor represents a plain unicolor background, equivalent to background-color in CSS
     */
    class BackgroundColor extends Pattern {
        public function __construct(IColor $color) {
            parent::__construct(1);
            parent::setColor(0, $color);
        }

        public function getColorAt(int $x, int $y) : IColor {
            return parent::getColor(0);
        }
    }
?>