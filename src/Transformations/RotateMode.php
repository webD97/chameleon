<?php
    declare(strict_types=1);
    namespace Chameleon\Transformations;

    use Eloquent\Enumeration\AbstractEnumeration;

    /**
     * Class RotateMode
     * @package Chameleon\Transformations
     */
    final class RotateMode extends AbstractEnumeration {
        /**
         * Clockwise rotation
         */
        const CLOCKWISE = 1;

        /**
         * Counter clockwise rotation
         */
        const COUNTER_CLOCKWISE = 1;
    }