<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;

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
        }

        /**
         * Draw the rectangle onto the image resource
         *
         * @param $imageResource
         * @return void
         */
        public function draw($imageResource) {
            parent::draw($imageResource);

            imagerectangle($imageResource, 
                $this -> point -> getX(),
                $this -> point -> getY() + $this -> height,
                $this -> point -> getX() + $this -> width,
                $this -> point -> getY(),
                imagecolorallocate($imageResource, 0, 0, 0)
            );
        }
    }
?>