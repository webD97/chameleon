<?php
    namespace Chameleon\Primitives;

    use Chameleon\Image;
    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Primitives\IPrimitive;

    class Line implements IPrimitive {
        private $start;
        private $end;
        private $color;
        private $thickness;

        public function __construct(Vector2 $start, Vector2 $end) {
            $this -> start = $start;
            $this -> end = $end;

            $this -> thickness = 1;
            $this -> color = new RGBColor(0, 0, 0);
        }

        public function getStart() : Vector2 {
            return $this -> start;
        }

        public function setStart(Vector2 $start) : self {
            $this -> start = $start;
            
            return $this;
        }

        public function getEnd() : Vector2 {
            return $this -> end;
        }

        public function setEnd(Vector2 $end) : self {
            $this -> end = $end;
            
            return $this;
        }

        public function getThickness() : int {
            return $this -> thickness;
        }

        public function setThickness(int $thickness) : self {
            $this -> thickness = $thickness;
            
            return $this;
        }

        public function getColor() : IColor {
            return $this -> color;
        }

        public function setColor(IColor $color) : self {
            $this -> color = $color;
            
            return $this;
        }

        public function getPosition() : Vector2 {
            return $this -> getStart();
        }

        public function setPosition(Vector2 $position) : self {
            $dx = $this -> start -> getX() - $this -> end -> getX();
            $dy = $this -> start -> getY() - $this -> end -> getY();
            $this -> start -> setX($position -> getX());
            $this -> start -> setY($position -> getY());
            $this -> end -> setX($position -> getX() - $dx);
            $this -> end -> setY($position -> getY() - $dy);

            return $this;
        }

        public function draw(Image $image) : self {
            $image -> registerColorIfUnknown($this -> color);
            
            imagesetthickness($image -> getImageResource(), $this -> getThickness());

            imageline(
                $image -> getImageResource(), 
                $this -> getStart() -> getX(),
                $this -> getStart() -> getY(),
                $this -> getEnd() -> getX(),
                $this -> getEnd() -> getY() ,
                $image -> getRegisteredColor($this -> getColor())
            );

            imagesetthickness($image -> getImageResource(), 1);

            return $this;
        }
    }
?>