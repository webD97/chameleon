<?php
    namespace Chameleon\Primitives\Decorators;

    use Chameleon\Primitives\Decorators\IDecorator;
    use Chameleon\Colors\IColor;

    class SimpleBackground implements IDecorator {
        private $thickness;
        private $color;

        public function draw($imageresource) {
            
        }

        /**
         * Class constructor
         *
         * @param IColor $color Background color
         */
        public function __construct(IColor $color) {
            $this -> color = $color;
        }

        /**
         * Get background color
         *
         * @return IColor
         */
        public function getColor() : IColor {
            return $this -> color;
        }

        /**
         * Set background color
         *
         * @param IColor $color
         * @return void
         */
        public function setColor(IColor $color) {
            $this -> color = $color;
        }
    }
?>