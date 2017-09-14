<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    use SplEnum;

    /**
     * Class ScaleMode
     * @package Chameleon\Transformations
     */
    class ScaleMode extends SplEnum {
        const NEAREST_NEIGHBOUR = 1;
        const BILINEAR_FIXED = 2;
        const BICUBIC = 4;
        const BICUBIC_FIXED = 8;
    }