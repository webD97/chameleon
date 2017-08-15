<?php
    namespace Chameleon\Primitives;

    interface IPrimitive {
        public function setPosition(\Vector2 $point);
        public function draw($imageResource);
    }
?>