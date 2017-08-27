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
         * Set up color using RGBAColor
         *
         * @return void
         */
        public static function fromRGBA(RGBAColor $color);
    }
?>