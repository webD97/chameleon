<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Colors\IColor;

    abstract class Primitive implements IPrimitive {
        protected $point;

        protected $borderColor;
        protected $borderThickness;
        protected $backgroundColor;
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
         * Set border color
         *
         * @param IColor $color The color
         * @return self
         */
        public function setBorderColor(IColor $color) : self {
            $this -> borderColor = $color;
            return $this;
        }

        /**
         * Get border color
         *
         * @return IColor The color
         */
        public function getBorderColor(): IColor {
            return $this -> borderColor;
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
         * Set background color
         *
         * @param Icolor $color The color
         * @return self
         */
        public function setBackgroundColor(Icolor $color) : self {
            $this -> backgroundColor = $color;
            return $this;
        }

        /**
         * Get background color
         *
         * @return IColor The color
         */
        public function getBackgroundColor(): IColor {
            return $this -> backgroundColor;
        }
    }
?>