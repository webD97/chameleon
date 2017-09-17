<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    use Eloquent\Enumeration\AbstractEnumeration;

    /**
     * Class ScaleMode
     * @package Chameleon\Transformations
     */
    final class ScaleMode extends AbstractEnumeration {
        const NEAREST_NEIGHBOUR = IMG_NEAREST_NEIGHBOUR;
        const BILINEAR_FIXED = IMG_BILINEAR_FIXED;
        const BICUBIC = IMG_BICUBIC;
        const BICUBIC_FIXED = IMG_BICUBIC_FIXED;
    }