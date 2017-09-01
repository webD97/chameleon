<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use SplFixedArray;
    use Chameleon\Colors\IColor;
    use Chameleon\Patterns\IPattern;

    abstract class Pattern extends SplFixedArray implements IPattern {
        
        public function __construct(int $colors) {
            parent::__construct($colors);
        }

        protected function setColor(int $index, IColor $color) {
            parent::offsetSet($index, $color);
        }

        protected function getColor(int $index) : IColor {
            return parent::offsetGet($index);
        }
    }
?>