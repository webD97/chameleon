<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    /**
     * Class ScaleMode
     * @package Chameleon\Transformations
     */
    abstract class ScaleMode {
        const NEAREST_NEIGHBOUR = 1;
        const BILINEAR_FIXED = 2;
        const BICUBIC = 4;
        const BICUBIC_FIXED = 8;
    }