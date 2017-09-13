<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Patterns\IPattern;

    abstract class Primitive implements IPrimitive {
        protected $point;

        protected $borderPattern;
        protected $borderThickness;
        protected $backgroundPattern;

        abstract public function draw(Image $image);

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
         * @return Vector2
         */
        public function getPosition() : Vector2 {
            return $this -> point;
        }

        /**
         * Set border pattern
         *
         * @param IPattern|null $pattern The pattern
         * @return self
         */
        public function setBorderPattern(?IPattern $pattern) : self {
            $this -> borderPattern = $pattern;
            return $this;
        }

        /**
         * Get border pattern
         *
         * @return IPattern|null
         */
        public function getBorderPattern() : ?IPattern {
            return $this -> borderPattern;
        }

        /**
         * Set border thickness in px
         *
         * @param int $thickness the thickness in px
         * @return self
         */
        public function setBorderThickness(int $thickness) : self {
            $this -> borderThickness = $thickness;
            return $this;
        }

        /**
         * Get border thickness in px
         *
         * @return int the thickness in px
         */
        public function getBorderThickness(): int {
            return $this -> borderThickness;
        }

        /**
         * Set background pattern
         *
         * @param IPattern|null $pattern
         *
         * @return Primitive
         */
        public function setBackgroundPattern(?IPattern $pattern) : self {
            $this -> backgroundPattern = $pattern;
            return $this;
        }

        /**
         * Get background pattern
         *
         * @return IPattern|null The pattern
         */
        public function getBackgroundPattern(): ?IPattern {
            return $this -> backgroundPattern;
        }
    }
?>