<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Mask;
    use Chameleon\ColorFactory;
    use Chameleon\Patterns\BackgroundColor;

    class Rectangle extends Primitive {
        private $width;
        private $height;

        /**
         * Class constructor
         *
         * @param Vector2 $point Top left start point
         * @param int $width width in px
         * @param int $height height in px
         */
        public function __construct(Vector2 $point, int $width, int $height) {
            $this -> point = $point;
            $this -> width = $width;
            $this -> height = $height;

            $this -> setBorderPattern(new BackgroundColor(ColorFactory::transparent()));
            $this -> setBorderThickness(1);
            $this -> setBackgroundPattern(new BackgroundColor(ColorFactory::transparent()));
        }

        /**
         * Get width in px
         *
         * @return int
         */
        public function getWidth() : int {
            return $this -> width;
        }

        /**
         * Set width in px
         *
         * @param int $width
         * @return void
         */
        public function setWidth(int $width) : self {
            $this -> width = $width;
            return $this;
        }

        /**
         * Get height in px
         *
         * @return int
         */
        public function getHeight() : int {
            return $this -> height;
        }

        /**
         * Set height in px
         *
         * @param int $height
         * @return void
         */
        public function setHeight(int $height) : self {
            $this -> height = $height;
            return $this;
        }

        /**
         * Draw the rectangle onto the image resource
         * 
         * Draws the rectangle with border and background (if set).
         * By default, a rectangle has a 1px black border and no background
         *
         * @param Image $image
         * @return self
         */
        public function draw(Image $image) : self {

            if ($this -> backgroundPattern -> getColor() != ColorFactory::transparent()) {
                $backgroundMask = new Mask($this -> width, $this -> height, 1);

                $startX = $this -> getPosition() -> getX();
                $startY = $this -> getPosition() -> getY();

                $size = $this -> width * $this -> height;

                for ($i = 0; $i < $size; $i++) {
                    $x = $i % $this -> width;
                    $y = intdiv($i, $this -> width);

                    $image -> setPixel($x + $startX, $y + $startY, 
                        $backgroundMask -> getValueAt($i) == true ?
                        $this -> backgroundPattern -> getColorAt($x, $y) :
                        ColorFactory::transparent()
                    );
                }
            }

            return $this;
        }
    }
?>