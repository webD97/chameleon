<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;

    abstract class Primitive implements IPrimitive {
        protected $point;

        public abstract function draw($imageResource);

        public function setPosition(Vector2 $point) {
            $this -> point = $point;
        }
    }
?>