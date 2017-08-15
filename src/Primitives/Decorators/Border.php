<?php
    namespace Chameleon\Primitives\Decorators;

    use Chameleon\Primitives\Decorators\IDecorator;
    use Chameleon\Colors\IColor;

    class Border implements IDecorator {
        private $thickness;
        private $color;

        public function draw($imageresource) {
            
        }

        /**
         * Class constructor
         *
         * @param int $thickness Border thickness in px
         * @param IColor $color Border color
         */
        public function __construct(int $thickness, IColor $color) {
            $this -> thickness = $thickness;
            $this -> color = $color;
        }

        /**
         * Get border thickness in px
         *
         * @return int
         */
        public function getThickness() : int {
            return $this -> thickness;
        }

        /**
         * Set border thickness in px
         *
         * @param int $thickness
         * @return void
         */
        public function setThickness(int $thickness) {
            $this -> thickness = $thickness;
        }

        /**
         * Get border color
         *
         * @return IColor
         */
        public function getColor() : IColor {
            return $this -> color;
        }

        /**
         * Set border color
         *
         * @param IColor $color
         * @return void
         */
        public function setColor(IColor $color) {
            $this -> color = $color;
        }
    }
?>