<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Options;

    final class ContrastFilter extends BuiltinFilter {
        public function __construct(int $contrast = 0) {
            if ($contrast < -255 || $contrast > 255) {
                throw new ValueOutOfBoundsException("contrast", $contrast, -255, 255);
            }

            parent ::__construct(new Options(
                ["contrast" => $contrast]
            ));
        }

        public function getArg1(): int {
            return $this -> getOptions() -> getOption("contrast");
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_BRIGHTNESS;
        }
    }