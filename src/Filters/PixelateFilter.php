<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Options;

    final class PixelateFilter extends BuiltinFilter {
        public function __construct(int $pixelate = 0) {

            parent ::__construct(new Options(
                ["pixelate" => $pixelate]
            ));
        }

        public function getArg1(): int {
            return $this -> getOptions() -> getOption("pixelate");
        }

        public function getArg2(): bool {
            return true;
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_PIXELATE;
        }
    }