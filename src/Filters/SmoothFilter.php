<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Options;

    final class SmoothFilter extends BuiltinFilter {
        public function __construct(int $smoothness = 0) {
            if ($smoothness < 0 || $smoothness > 100) {
                throw new ValueOutOfBoundsException("smoothness", $smoothness, 0, 100);
            }

            parent ::__construct(new Options(
                ["smoothness" => $smoothness]
            ));
        }

        public function getArg1(): int {
            return $this -> getOptions() -> getOption("smoothness");
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_SMOOTH;
        }
    }