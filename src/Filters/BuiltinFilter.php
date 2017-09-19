<?php
    declare(strict_types=1);
    namespace Chameleon\Filters;


    use Chameleon\Image;
    use Chameleon\Options;
    use PhpOption\None;

    /**
     * Class BuiltinFilter enables wrapping of PHP's builtin image filter functions
     * @package Chameleon\Filters
     */
    abstract class BuiltinFilter implements IFilter {
        /**
         * @var Options The filter's options
         */
        private $options;

        public function __construct(Options $options) {
            $this -> options = $options;
        }

        /**
         * Get $arg1 for imagefilter()
         *
         * @return int|null
         */
        public function getArg1() {
            return null;
        }

        /**
         * Get $arg2 for imagefilter()
         *
         * @return int|null
         */
        public function getArg2() {
            return null;
        }

        /**
         * Get $arg3 for imagefilter()
         *
         * @return int|null
         */
        public function getArg3() {
            return null;
        }

        /**
         * Get $arg4 for imagefilter()
         *
         * @return int|null
         */
        public function getArg4() {
            return null;
        }

        /**
         * Get filter ID (IMG_FILTER_*)
         *
         * @return int
         */
        public abstract function getFilterID() : int;

        public function apply(Image $image) : bool {
            if ($this -> getArg4() !== null) {
                return imagefilter(
                    $image -> getImageResource(),
                    $this -> getFilterID(),
                    $this -> getArg1(),
                    $this -> getArg2(),
                    $this -> getArg3(),
                    $this -> getArg4()
                );
            }
            elseif ($this -> getArg3() !== null) {
                return imagefilter(
                    $image -> getImageResource(),
                    $this -> getFilterID(),
                    $this -> getArg1(),
                    $this -> getArg2(),
                    $this -> getArg3()
                );
            }
            elseif ($this -> getArg2() !== null) {
                return imagefilter(
                    $image -> getImageResource(),
                    $this -> getFilterID(),
                    $this -> getArg1(),
                    $this -> getArg2()
                );
            }
            elseif ($this -> getArg1() !== null) {
                return imagefilter(
                    $image -> getImageResource(),
                    $this -> getFilterID(),
                    $this -> getArg1()
                );
            }

            return imagefilter(
                $image -> getImageResource(),
                $this -> getFilterID()
            );
        }

        /**
         * Get Options
         *
         * @return Options
         */
        public function getOptions() : Options {
            return $this -> options;
        }
    }