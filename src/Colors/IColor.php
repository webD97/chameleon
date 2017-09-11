<?php
    namespace Chameleon\Colors;

    use Chameleon\Colors\RGBAColor;

    interface IColor {
        /**
         * Construct from an RGBAColor
         *
         * @return void
         */
        public static function fromRGBA(RGBAColor $color);

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
         * Make the color lighter
         *
         * @param float $percentage
         * @return self
         */
        public function lighten(float $percentage) : IColor;

        /**
         * Make the color darker
         *
         * @param float $percentage
         * @return self
         */
        public function darken(float $percentage) : IColor;
    }
?>