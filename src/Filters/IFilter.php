<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Image;

    /**
     * Interface IFilter
     * @package Chameleon\Filters
     */
    interface IFilter {
        /**
         * Apply the filter to an image.
         *
         * @param Image $image The image to be applied to
         *
         * @return bool Returns TRUE on success or FALSE on failure.
         */
        public function apply(Image $image) : bool;
    }