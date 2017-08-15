<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;

    interface IPrimitive {
        public function setPosition(Vector2 $point);
        public function draw($imageResource);
    }
?>