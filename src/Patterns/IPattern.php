<?php
    namespace Chameleon\Patterns;

    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;

    interface IPattern {
        public function getColorAt(Vector2 $position) : IColor;
    }
?>