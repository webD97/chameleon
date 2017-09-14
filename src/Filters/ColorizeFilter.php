<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;

    use Chameleon\Exceptions\ValueOutOfBoundsException;
    use Chameleon\Options;

    final class ColorizeFilter extends BuiltinFilter {
        public function __construct(int $red = 0, int $green = 0, int $blue = 0, int $alpha = 0) {
            if ($red < 0 || $red > 255) {
                throw new ValueOutOfBoundsException("red", $red, 0, 255);
            }
            if ($green < 0 || $green > 255) {
                throw new ValueOutOfBoundsException("green", $green, 0, 255);
            }
            if ($blue < 0 || $blue > 255) {
                throw new ValueOutOfBoundsException("blue", $blue, 0, 255);
            }
            if ($alpha < 0 || $alpha > 127) {
                throw new ValueOutOfBoundsException("alpha", $alpha, 0, 127);
            }

            parent ::__construct(new Options(
                ["red" => $red],
                ["green" => $green],
                ["blue" => $blue],
                ["alpha" => $alpha]
            ));
        }

        public function getArg1(): int {
            return $this -> getOptions() -> getOption("red");
        }

        public function getArg2(): int {
            return $this -> getOptions() -> getOption("green");
        }

        public function getArg3(): int {
            return $this -> getOptions() -> getOption("blue");
        }

        public function getArg4(): int {
            return $this -> getOptions() -> getOption("alpha");
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public function getFilterID(): int {
            return IMG_FILTER_COLORIZE;
        }
    }