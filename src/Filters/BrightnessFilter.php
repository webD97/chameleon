<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Options;

    final class BrightnessFilter extends BuiltinFilter {
        /**
         * BrightnessFilter constructor.
         *
         * @param float $brightness [-1, 1]
         *
         * @throws ValueOutOfBoundsException If $brightness not e[-1, 1]
         */
        public function __construct(float $brightness = 0) {
            if ($brightness < -1 || $brightness > 1) {
                throw new ValueOutOfBoundsException("brightness", $brightness, -1, 1);
            }

            parent ::__construct(new Options(
                ["brightness" => $brightness]
            ));
        }

        public function getArg1(): int {
            return (int) round($this -> getOptions() -> getOption("brightness") * 255, 0);
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