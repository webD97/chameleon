<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Mask;
    use Chameleon\Fragment;
    use Chameleon\ColorFactory;
    use Chameleon\Patterns\BackgroundColor;

    class Rectangle extends Primitive {
        private $width;
        private $height;

        private $backgroundFragment;
        private $borderFragment;

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

        private function renderFragments() {
            $backgroundMask = new Mask($this -> width, $this -> height, 1);

            $this -> backgroundFragment = new Fragment($this -> backgroundPattern, $backgroundMask);
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
            $this -> renderFragments();

            if ($this -> backgroundFragment) {
                $width = $this -> backgroundFragment -> getWidth();
                $height = $this -> backgroundFragment -> getHeight();

                for ($y = 0; $y < $height; $y++) {
                    for ($x = 0; $x < $width; $x++) {
                        $imagePos = new Vector2($this -> getPosition() -> getX() + $x, $this -> getPosition() -> getY() + $y);
                        $image -> setPixel($imagePos, $this -> backgroundFragment -> getColorAt(new Vector2($x, $y)));
                    }
                }
            }

            return $this;
        }
    }
?>