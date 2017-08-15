<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Primitives\Decorators\Border;
    use Chameleon\Primitives\Decorators\SimpleBackground;

    abstract class Primitive implements IPrimitive {
        protected $point;

        /**
         * Draw the primitive onto the given image resource
         *
         * @param $imageResource The GD image resource
         * @return void
         */
        public abstract function draw($imageResource);

        /**
         * Set primitve position
         *
         * @param Vector2 $point
         * @return void
         */
        public function setPosition(Vector2 $point) {
            $this -> point = $point;
        }

        /**
         * Get primitive position
         *
         * @return void
         */
        public function getPosition() : Vector2 {
            return $this -> point;
        }

        /**
         * Set the primitve's border
         *
         * @param Border $border
         * @return void
         */
        public function setBorder(Border $border) {
            $this -> border = $border;
        }

        /**
         * Get the primitive's border
         *
         * @return Border
         */
        public function getBorder(): Border {
            return $this -> border;
        }

        /**
         * Set the primitve's background
         *
         * @param BSimpleackground $background
         * @return void
         */
        public function setBackground(SimpleBackground $background) {
            $this -> background = $background;
        }

        /**
         * Get the primitive's background
         *
         * @return SimpleBackground
         */
        public function getBackground(): SimpleBackground {
            return $this -> background;
        }
    }
?>