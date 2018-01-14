<?php
    declare(strict_types = 1);
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Mask;
    use Chameleon\Patterns\IPattern;
    use Chameleon\Patterns\BackgroundColor;

    /**
     * Rectangle, by default completely transparent
     */
    class Rectangle extends Primitive {
        /**
         * @var int Width of the rectangle
         */
        private $width;

        /**
         * @var int Height of the rectangle
         */
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
         * @return self
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
         * @return self
         */
        public function setHeight(int $height) : self {
            $this -> height = $height;
            return $this;
        }

        /**
         * Draw a pattern onto the given image using a mask
         *
         * @param Image $image
         * @param IPattern $pattern
         * @param Mask $mask
         * @param int $startX
         * @param int $startY
         */
        private function drawPattern(Image $image, IPattern $pattern, Mask $mask, int $startX, int $startY) {
            // Register all colors in the pattern
            foreach ($pattern as $color) {
                $image -> registerColor($color);
            }

            // Cache total amount of pixels
            $maskWidth = $mask -> getWidth();
            $maskHeight = $mask -> getHeight();
            $size = $maskWidth * $maskHeight;

            // Loop over all pixels
            for ($maskIndex = 0; $maskIndex < $size; $maskIndex++) {
                // Map the index of the pixel to image coordinates
                $patternX = $maskIndex % $maskWidth;
                $patternY = intdiv($maskIndex, $maskWidth);

                // If mask allows this pixel, draw it onto the image
                if ($mask -> offsetGet($maskIndex) === true) {
                    $image -> setPixel(
                        $patternX + $startX,
                        $patternY + $startY,
                        $pattern -> getColorAt($patternX, $patternY)
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
            $this->drawBackgroundPattern($image);
            $this->drawBorderPattern($image);

            return $this;
        }

        /**
         * Draw a unicolor background
         *
         * @param Image $image
         * @return Rectangle
         */
        private function drawUnicolorBackground(Image $image) : self {
            $backgroundColor = $this->backgroundPattern->getColorAt(0, 0);
            $image->registerColor($backgroundColor);

            imagefilledrectangle(
                $image->getImageResource(),
                $this->getPosition()->getX(),
                $this->getPosition()->getY(),
                $this->getPosition()->getX() + $this->getWidth() - 1,
                $this->getPosition()->getY() + $this->getHeight() - 1,
                $backgroundColor->getInt()
            );

            return $this;
        }

        /**
         * Draw a unicolor border around the background
         *
         * @param Image $image
         * @return Rectangle
         */
        private function drawUnicolorBorder(Image $image): self {
            $backgroundColor = $this->borderPattern->getColorAt(0, 0);
            $image->registerColor($backgroundColor);

            // Top
            imagefilledrectangle(
                $image->getImageResource(),
                $this->getPosition()->getX() - $this->borderThickness,
                $this->getPosition()->getY() - $this->borderThickness,
                $this->getPosition()->getX() + $this->getWidth() + $this->borderThickness - 1,
                $this->getPosition()->getY() - 1,
                $backgroundColor->getInt()
            );
            // Bottom
            imagefilledrectangle(
                $image->getImageResource(),
                $this->getPosition()->getX() - $this->borderThickness,
                $this->getPosition()->getY() + $this->getHeight() + $this->borderThickness - 1,
                $this->getPosition()->getX() + $this->getWidth() + $this->borderThickness - 1,
                $this->getPosition()->getY() + $this->getHeight(),
                $backgroundColor->getInt()
            );
            // Left
            imagefilledrectangle(
                $image->getImageResource(),
                $this->getPosition()->getX() - $this->borderThickness,
                $this->getPosition()->getY(),
                $this->getPosition()->getX() - 1,
                $this->getPosition()->getY() + $this->getHeight() - 1,
                $backgroundColor->getInt()
            );
            // Right
            imagefilledrectangle(
                $image->getImageResource(),
                $this->getPosition()->getX() + $this->getWidth(),
                $this->getPosition()->getY(),
                $this->getPosition()->getX() + $this->getWidth() + $this->borderThickness - 1,
                $this->getPosition()->getY() + $this->getHeight() - 1,
                $backgroundColor->getInt()
            );

            return $this;
        }

        /**
         * Create the mask representing the background
         *
         * @return Mask
         */
        private function createBackgroundMask(): Mask {
            $backgroundMask = new Mask($this->width, $this->height);
            $maskSize = $this->width * $this->height;

            for ($i = 0; $i < $maskSize; $i++) {
                $backgroundMask->offsetSet($i, true);
            }
            return $backgroundMask;
        }

        /**
         * Create the mask representing the border
         *
         * @return Mask
         */
        private function createBorderMask(): Mask {
            $borderMask = new Mask($this->width + 2 * $this->borderThickness, $this->height + 2 * $this->borderThickness);

            $width = $borderMask->getWidth();
            $height = $borderMask->getHeight();

            for ($y = 0; $y < $height; $y++) {
                for ($x = 0; $x < $width; $x++) {
                    if (
                        $x < $this->borderThickness ||                // left
                        $x > $width - $this->borderThickness - 1 ||   // right
                        $y < $this->borderThickness ||                // top
                        $y > $height - $this->borderThickness - 1     // bottom
                    ) {
                        $borderMask->setValueAt($x, $y, true);
                    }
                }
            }
            return $borderMask;
        }

        /**
         * Draw the background pattern if one exists
         *
         * @param Image $image
         */
        private function drawBackgroundPattern(Image $image): void {
            if ($this->backgroundPattern) {
                if ($this->backgroundPattern instanceof BackgroundColor) {
                    // Unicolor background can make use of imagefilledrectangle()
                    $this->drawUnicolorBackground($image);
                } else {
                    // Generate the mask for this pattern
                    $backgroundMask = $this->createBackgroundMask();

                    // Draw pattern using mask
                    $this->drawPattern(
                        $image,
                        $this->backgroundPattern,
                        $backgroundMask,
                        $this->getPosition()->getX(),
                        $this->getPosition()->getY()
                    );
                }
            }
        }

        /**
         * Draw the border pattern if one exists
         * 
         * @param Image $image
         */
        private function drawBorderPattern(Image $image): void {
            if ($this->borderPattern && $this->borderThickness > 0) {
                if ($this->borderPattern instanceof BackgroundColor) {
                    $this->drawUnicolorBorder($image);
                } else {
                    // Generate the mask for this pattern
                    $borderMask = $this->createBorderMask();

                    // Draw pattern using mask
                    $this->drawPattern(
                        $image,
                        $this->borderPattern,
                        $borderMask,
                        $this->getPosition()->getX() - $this->borderThickness,
                        $this->getPosition()->getY() - $this->borderThickness
                    );
                }
            }
        }
    }
?>