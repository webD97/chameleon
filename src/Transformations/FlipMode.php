<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    use Eloquent\Enumeration\AbstractEnumeration;

    /**
     * Class FlipMode
     *
     * @api
     *
     * @package Chameleon\Transformations
     */
    final class FlipMode extends AbstractEnumeration {
        /**
         * Horizontal flip mode. Do not use this directly! Use FlipMode::HORIZONTAL() instead!
         */
        const HORIZONTAL = IMG_FLIP_HORIZONTAL;

        /**
         * Vertical flip mode. Do not use this directly! Use FlipMode::VERTICAL() instead!
         */
        const VERTICAL = IMG_FLIP_VERTICAL;

        /**
         * Horizontal and vertical flip modes combined. Do not use this directly! Use FlipMode::BOTH() instead!
         */
        const BOTH = IMG_FLIP_BOTH;
    }