<?php
    namespace Chameleon\Colors;


    /**
     * Interface IColor
     *
     * @api
     *
     * @package Chameleon\Colors
     */
    interface IColor {
        /**
         * Construct from an RGBAColor
         *
         * @param RGBAColor $color A color.
         *
         * @api
         *
         * @return void
         */
        public static function fromRGBA(RGBAColor $color);

        /**
         * Get the RGBA representation of the color
         *
         * @api
         *
         * @return RGBAColor
         */
        public function getRGBA() : RGBAColor;

        /**
         * Return the integer value of this color.
         *
         * @api
         *
         * @return int
         */
        public function getInt() : int;

        /**
         * Make the color lighter
         *
         * @param float $percentage
         *
         * @api
         *
         * @return self
         */
        public function lighten(float $percentage) : IColor;

        /**
         * Make the color darker
         *
         * @api
         *
         * @param float $percentage
         * @return self
         */
        public function darken(float $percentage) : IColor;

        /**
         * Return a string representation of the color.
         *
         * @api
         *
         * @return string
         */
        public function __toString() : string;
    }
?>