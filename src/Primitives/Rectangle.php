<?php
    declare(strict_types = 1);
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

            $this -> setBorderPattern(null);
            $this -> setBorderThickness(1);
            $this -> setBackgroundPattern(null);
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

            if ($this -> backgroundPattern) {
                // Generate the mask for this pattern
                $backgroundMask = new Mask($this -> width, $this -> height, true);

                // Cache x and y coordinate of the rectangle
                $startX = $this -> getPosition() -> getX();
                $startY = $this -> getPosition() -> getY();

                // Register all colors in the pattern
                foreach ($this -> backgroundPattern as $color) {
                    $image -> registerColor($color);
                }

                // Cache total amount of pixels
                $size = $this -> width * $this -> height;

                // Loop over all pixels
                for ($i = 0; $i < $size; $i++) {
                    // Map the index of the pixel to image coordinates
                    $x = $i % $this -> width;
                    $y = intdiv($i, $this -> width);

                    // If mask allows this pixel, draw it onto the image
                    if ($backgroundMask -> getValueAt($i) === true) {
                        $image -> setPixel(
                            $x + $startX,
                            $y + $startY,
                            $this -> backgroundPattern -> getColorAt($x, $y)
                        );
                    }
                }
            }

            return $this;
        }
    }
?>