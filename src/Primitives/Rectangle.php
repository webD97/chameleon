<?php
    declare(strict_types = 1);
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Mask;
    use Chameleon\ColorFactory;
    use Chameleon\Patterns\IPattern;
    use Chameleon\Patterns\BackgroundColor;

    /**
     * Rectangle, by default completely transparent
     */
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
            $this -> setBackgroundPattern(null)
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

        private function drawPattern(Image $image, IPattern $pattern, Mask $mask, int $startX, int $startY) {
            // Register all colors in the pattern
            foreach ($pattern as $color) {
                $image -> registerColor($color);
            }

            // Cache total amount of pixels
            $width = $mask -> getWidth();
            $height = $mask -> getHeight();
            $size = $width * $height;

            // Loop over all pixels
            for ($i = 0; $i < $size; $i++) {
                // Map the index of the pixel to image coordinates
                $x = $i % $width;
                $y = intdiv($i, $width);

                // If mask allows this pixel, draw it onto the image
                if ($mask -> getValueAt($i) === true) {
                    $image -> setPixel(
                        $x + $startX,
                        $y + $startY,
                        $pattern -> getColorAt($x, $y)
                    );
                }
            }
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
                if ($this -> backgroundPattern instanceof BackgroundColor) {
                    // Unicolor background can make use of imagefilledrectangle()
                    $color = $this -> backgroundPattern -> getColorAt(0, 0);
                    $image -> registerColor($color);

                    imagefilledrectangle(
                        $image -> getImageResource(),
                        $this -> getPosition() -> getX(),
                        $this -> getPosition() -> getY(),
                        $this -> getPosition() -> getX() + $this -> getWidth(),
                        $this -> getPosition() -> getY() + $this -> getHeight(),
                        $image -> getRegisteredColor($color)
                    );
                }
                else {
                    // Generate the mask for this pattern
                    $backgroundMask = new Mask($this -> width, $this -> height, true);
    
                    // Draw pattern using mask
                    $this -> drawPattern(
                        $image,
                        $this -> backgroundPattern,
                        $backgroundMask,
                        $this -> getPosition() -> getX(),
                        $this -> getPosition() -> getY()
                    );
                }
            }

            if ($this -> borderPattern && $this -> borderThickness > 0) {
                if ($this -> borderPattern instanceof BackgroundColor) {
                    // Unicolor border can make use of imagefilledrectangle()
                    $color = $this -> borderPattern -> getColorAt(0, 0);
                    $image -> registerColor($color);

                    // Top
                    imagefilledrectangle(
                        $image -> getImageResource(),
                        $this -> getPosition() -> getX() - $this -> borderThickness -1,
                        $this -> getPosition() -> getY() - $this -> borderThickness - 1,
                        $this -> getPosition() -> getX() + $this -> getWidth() + $this -> borderThickness - 1,
                        $this -> getPosition() -> getY() - 1,
                        $image -> getRegisteredColor($color)
                    );
                    // Bottom
                    imagefilledrectangle(
                        $image -> getImageResource(),
                        $this -> getPosition() -> getX() - $this -> borderThickness -1,
                        $this -> getPosition() -> getY() + $this -> getHeight() + $this -> borderThickness + 1,
                        $this -> getPosition() -> getX() + $this -> getWidth() + $this -> borderThickness - 1,
                        $this -> getPosition() -> getY() + $this -> getHeight() + 1,
                        $image -> getRegisteredColor($color)
                    );
                    // Left
                    imagefilledrectangle(
                        $image -> getImageResource(),
                        $this -> getPosition() -> getX() - $this -> borderThickness - 1,
                        $this -> getPosition() -> getY(),
                        $this -> getPosition() -> getX() - 1,
                        $this -> getPosition() -> getY() + $this -> getHeight(),
                        $image -> getRegisteredColor($color)
                    );
                    // Right
                    imagefilledrectangle(
                        $image -> getImageResource(),
                        $this -> getPosition() -> getX() + $this -> getWidth() + 1,
                        $this -> getPosition() -> getY(),
                        $this -> getPosition() -> getX() + $this -> getWidth() + $this -> borderThickness - 1,
                        $this -> getPosition() -> getY() + $this -> getHeight(),
                        $image -> getRegisteredColor($color)
                    );
                }
                else {
                    // Generate the mask for this pattern
                    $borderMask = new Mask($this -> width + 2 * $this -> borderThickness, $this -> height + 2 * $this -> borderThickness, false);
    
                    $width = $borderMask -> getWidth();
                    $height = $borderMask -> getHeight();
    
                    for ($y = 0; $y < $height; $y++) {
                        for ($x = 0; $x < $width; $x++) {
                            if (
                                $x < $this -> borderThickness ||                // left
                                $x > $width - $this -> borderThickness - 1 ||   // right
                                $y < $this -> borderThickness ||                // top
                                $y > $height - $this -> borderThickness - 1     // bottom
                            ) {
                                $borderMask -> setValueAt($y * $width + $x, true);
                            }
                        }
                    }

                    // Draw pattern using mask
                    $this -> drawPattern(
                        $image,
                        $this -> borderPattern,
                        $borderMask,
                        $this -> getPosition() -> getX() - $this -> borderThickness,
                        $this -> getPosition() -> getY() - $this -> borderThickness
                    );
                }
            }

            return $this;
        }
    }
?>