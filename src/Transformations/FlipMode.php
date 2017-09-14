<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    use SplEnum;

    /**
     * Class FlipMode
     * @package Chameleon\Transformations
     */
    class FlipMode extends SplEnum {
        const HORIZONTAL = 1;
        const VERTICAL = 2;
        const BOTH = 4;
    }