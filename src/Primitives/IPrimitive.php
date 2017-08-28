<?php
    namespace Chameleon\Primitives;

    use Chameleon\Vector2;
    use Chameleon\Image;

    interface IPrimitive {
        /**
         * Set the position of this primitive
         *
         * @param Vector2 $point The position vector
         * @return self
         */
        public function setPosition(Vector2 $point);

        /**
         * Draw this primitive onto the image
         *
         * @param Image $image
         * @return self
         */
        public function draw(Image $image);
    }
?>