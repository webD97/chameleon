<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Options;

    final class SelectiveBlurFilter extends BuiltinFilter {
        public function __construct() {
            parent ::__construct(new Options());
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_SELECTIVE_BLUR;
        }
    }