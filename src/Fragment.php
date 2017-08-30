<?php
    namespace Chameleon;

    use Chameleon\Vector2;
    use Chameleon\Mask;
    use Chameleon\Patterns\IPattern;
    use Chameleon\ColorFactory;
    use Chameleon\Colors\IColor;

    class Fragment {
        private $data;
        private $mask;
        private $pattern;

        public function __construct(IPattern $pattern, Mask $mask) {
            $this -> mask = $mask;
            $this -> pattern = $pattern;
            $this -> data = array();

            for ($y = 0; $y < $mask -> getHeight(); $y++) {
                $this -> data[$y] = array();
                for ($x = 0; $x < $mask -> getWidth(); $x++) {
                    $pos = new Vector2($x, $y);
                    $this -> data[$y][$x] = ($mask -> getValueAt($pos) == true) ? $pattern -> getColorAt($pos) : ColorFactory::transparent();
                }
            }
        }

        public function getWidth() : int {
            return $this -> mask -> getWidth();
        }

        public function getHeight() : int {
            return $this -> mask -> getHeight();
        }

        public function getColorAt(Vector2 $position) : IColor {
            return $this -> data[$position -> getY()][$position -> getX()];
        }
    }
?>