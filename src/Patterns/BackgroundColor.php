<?php
    namespace Chameleon\Patterns;

    use Chameleon\Vector2;
    use Chameleon\Colors\IColor;
    use Chameleon\Patterns\IPattern;

    class BackgroundColor implements IPattern {
        private $color;

        public function __construct(IColor $color) {
            $this -> color = $color;
        }

        public function getColor() : IColor {
            return $this -> color;
        }

        public function setColor(IColor $color) : self {
            $this -> color = $color;

            return $this;
        }

        public function getColorAt(Vector2 $position) : IColor {
            return $this -> color;
        }
    }
?>