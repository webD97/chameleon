<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use \SplFixedArray;
    use Chameleon\ColorFactory;
    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;
    use Chameleon\Patterns\IPattern;

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