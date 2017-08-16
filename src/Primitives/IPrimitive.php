<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;

    interface IPrimitive {
        /**
         * Set theposition of this primitive
         *
         * @param Vector2 $point The position vector
         * @return void
         */
        public function setPosition(Vector2 $point);

        /**
         * Draw this primitive onto the image
         *
         * @param Image $image
         * @return void
         */
        public function draw(Image $image);
    }
?>