<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;

    interface IPattern {
        public function getColorAt(int $x, int $y) : IColor;
    }
?>