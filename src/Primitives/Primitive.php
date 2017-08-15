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
         * @return self
         */
        public function setPosition(Vector2 $point) : self {
            $this -> point = $point;
            return $this;
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
         * @return self
         */
        public function setBorder(Border $border) : self {
            $this -> border = $border;
            return $this;
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
         * @return self
         */
        public function setBackground(SimpleBackground $background) : self {
            $this -> background = $background;
            return $this;
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