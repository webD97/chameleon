<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use \SplFixedArray;
    use Chameleon\ColorFactory;
    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;
    use Chameleon\Patterns\IPattern;

    class BackgroundColor implements IPattern {
        private $colors;

        public function __construct(IColor $color) {
            $this -> colors = new SplFixedArray(1);
            $this -> colors -> offsetSet(0, $color);
        }

        public function getColorAt(int $x, int $y) : IColor {
            return $this -> colors -> offsetGet(0);
        }

        public function getColors() : SplFixedArray {
            return $this -> colors;
        }
    }
?>