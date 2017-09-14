<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Options;

    final class GaussianBlurFilter extends BuiltinFilter {
        public function __construct() {
            parent ::__construct(new Options());
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_GAUSSIAN_BLUR;
        }
    }