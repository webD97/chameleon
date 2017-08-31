<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use \SplFixedArray;
    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;

    interface IPattern {
        public function getColorAt(int $x, int $y) : IColor;
        public function getColors() : SplFixedArray;
    }
?>