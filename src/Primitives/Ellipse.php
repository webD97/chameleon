<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Colors\RGBColor;

    class Ellipse extends Primitive {
        private $width;
        private $height;

        /**
         * Class constructor
         *
         * @param Vector2 $point Center point
         * @param int $width width in px
         * @param int $height height in px
         */
        public function __construct(Vector2 $point, int $width, int $height) {
            $this -> point = $point;
            $this -> width = $width;
            $this -> height = $height;

            $this -> setBorderColor(null);
            $this -> setBorderThickness(1);
            $this -> setBackgroundColor(null);
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
         * Draw the ellipse onto the image resource
         * 
         * Draws the ellipse with border and background (if set).
         * By default, an ellipse has a 1px black border and no background
         *
         * @param Image $image
         * @return self
         */
        public function draw(Image $image) : self {
            if ($this -> backgroundColor) {
                $image -> registerColorIfUnknown($this -> backgroundColor);

                imagefilledellipse(
                    $image -> getImageResource(), 
                    $this -> getPosition() -> getX(),
                    $this -> getPosition() -> getY() ,
                    $this -> width,
                    $this -> height,
                    $image -> getRegisteredColor($this -> backgroundColor)
                );
            }

            if ($this -> borderColor) {
                $image -> registerColorIfUnknown($this -> borderColor);

                imageellipse(
                    $image -> getImageResource(), 
                    $this -> point -> getX(),
                    $this -> point -> getY() ,
                    $this -> width,
                    $this -> height,
                    $image -> getRegisteredColor($this -> borderColor)
                );
            }

            return $this;
        }
    }
?>