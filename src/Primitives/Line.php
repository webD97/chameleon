<?php
    namespace Chameleon\Primitives;

    use Chameleon\Image;
    use Chameleon\Vector2;
    use Chameleon\ColorFactory;
    use Chameleon\Colors\IColor;

    class Line implements IPrimitive {
        private $start;
        private $end;
        private $color;
        private $thickness;

        /**
         * Class constructor
         *
         * @param Vector2 $start Start vector
         * @param Vector2 $end End vector
         */
        public function __construct(Vector2 $start, Vector2 $end) {
            $this -> start = $start;
            $this -> end = $end;

            $this -> thickness = 1;
            $this -> color = ColorFactory::transparent();
        }

        /**
         * Get start vector
         *
         * @return Vector2 the start vector
         */
        public function getStart() : Vector2 {
            return $this -> start;
        }

        /**
         * Set start vector
         *
         * @param Vector2 $start The start vector
         * @return self
         */
        public function setStart(Vector2 $start) : self {
            $this -> start = $start;
            
            return $this;
        }

        /**
         * Get end vector
         *
         * @return Vector2 The end vector
         */
        public function getEnd() : Vector2 {
            return $this -> end;
        }

        /**
         * Set end vector
         *
         * @param Vector2 $end The end vector
         * @return self
         */
        public function setEnd(Vector2 $end) : self {
            $this -> end = $end;
            
            return $this;
        }

        /**
         * Get line thickness in px
         *
         * @return int thickness in px
         */
        public function getThickness() : int {
            return $this -> thickness;
        }

        /**
         * Set line thickness
         *
         * @param int $thickness Thickness in px
         * @return self
         */
        public function setThickness(int $thickness) : self {
            $this -> thickness = $thickness;
            
            return $this;
        }

        /**
         * Get line color
         *
         * @return IColor the color
         */
        public function getColor() : IColor {
            return $this -> color;
        }

        /**
         * Set line color
         *
         * @param IColor $color The color
         * @return self
         */
        public function setColor(IColor $color) : self {
            $this -> color = $color;
            
            return $this;
        }

        /**
         * Get position of the line (alias for Line::getStart)
         *
         * @return Vector2
         */
        public function getPosition() : Vector2 {
            return $this -> getStart();
        }

        /**
         * Set position of the line
         * 
         * Moves the line to a new position, changing both the start and end vectors
         *
         * @param Vector2 $position The new position of the start vector
         * @return self
         */
        public function setPosition(Vector2 $position) : self {
            $dx = $this -> start -> getX() - $this -> end -> getX();
            $dy = $this -> start -> getY() - $this -> end -> getY();
            $this -> start -> setX($position -> getX());
            $this -> start -> setY($position -> getY());
            $this -> end -> setX($position -> getX() - $dx);
            $this -> end -> setY($position -> getY() - $dy);

            return $this;
        }

        /**
         * Draw the line onto the specified image
         *
         * @param Image $image The image
         * @return self
         */
        public function draw(Image $image) : self {
            if ($this -> color) {
                $image -> registerColor($this -> color);
                
                imagesetthickness($image -> getImageResource(), $this -> getThickness());
    
                imageline(
                    $image -> getImageResource(), 
                    $this -> getStart() -> getX(),
                    $this -> getStart() -> getY(),
                    $this -> getEnd() -> getX(),
                    $this -> getEnd() -> getY() ,
                    $image -> getRegisteredColorId($this -> getColor())
                );
    
                imagesetthickness($image -> getImageResource(), 1);
            }

            return $this;
        }
    }
?>
