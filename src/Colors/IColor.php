<?php
    namespace Chameleon\Colors;

    use Chameleon\Colors\RGBAColor;

    interface IColor {
        /**
         * Get the RGBA representation of the color
         *
         * @return RGBAColor
         */
        public function getRGBA() : RGBAColor;

        /**
         * Find out if the color is transparent
         *
         * @return bool
         */
        public function isTransparent() : bool;
        
        /**
         * Construct from an RGBAColor
         *
         * @return void
         */
        public static function fromRGBA(RGBAColor $color);

    }
?>