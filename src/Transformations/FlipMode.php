<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    /**
     * Class FlipMode
     * @package Chameleon\Transformations
     */
    abstract class FlipMode {
        const HORIZONTAL = 1;
        const VERTICAL = 2;
        const BOTH = 4;
    }