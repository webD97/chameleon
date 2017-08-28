<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\Colors\RGBAColor;

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

            $this -> setBorderColor(new RGBAColor(0, 0, 0, 127));
            $this -> setBorderThickness(1);
            $this -> setBackgroundColor(new RGBAColor(0, 0, 0, 127));
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
         * @param Image $imageResource
         * @return self
         */
        public function draw(Image $image) : self {
            if ($this -> backgroundColor) {
                $image -> registerColorIfUnknown($this -> backgroundColor);

                imagefilledrectangle(
                    $image -> getImageResource(), 
                    $this -> getPosition() -> getX(),
                    $this -> getPosition() -> getY(),
                    $this -> getPosition() -> getX() + $this -> width,
                    $this -> getPosition() -> getY() + $this -> height,
                    $image -> getRegisteredColor($this -> backgroundColor)
                );
            }

            if ($this -> borderColor) {
                $image -> registerColorIfUnknown($this -> borderColor);

                imagesetthickness($image -> getImageResource(), $this -> getBorderThickness());

                imagerectangle(
                    $image -> getImageResource(), 
                    $this -> getPosition() -> getX(),
                    $this -> getPosition() -> getY(),
                    $this -> getPosition() -> getX() + $this -> width,
                    $this -> getPosition() -> getY() + $this -> height,
                    $image -> getRegisteredColor($this -> borderColor)
                );

                imagesetthickness($image -> getImageResource(), 1);
            }

            return $this;
        }
    }
?>