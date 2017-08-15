<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;

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
        }

        /**
         * Draw the ellipse onto the image resource
         *
         * @param [type] $imageResource
         * @return void
         */
        public function draw($imageResource) {
            parent::draw($imageResource);

            imageellipse($imageResource, 
                $this -> point -> getX(),
                $this -> point -> getY() ,
                $this -> width,
                $this -> height,
                imagecolorallocate($imageResource, 255, 255, 255)
            );
        }
    }
?>