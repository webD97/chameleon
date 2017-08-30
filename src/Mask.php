<?php
    namespace Chameleon;

    use Chameleon\Vector2;

    class Mask {
        private $data;

        public function __construct(int $width, int $height, bool $initializeWith = false) {
            $this -> width = $width;
            $this -> height = $height;
            $this -> data = array();

            for ($y = 0; $y < $this -> height; $y++) {
                $this -> data[$y] = array();
                for ($x = 0; $x < $this -> width; $x++) {
                    $this -> data[$y][$x] = $initializeWith;
                }
            }
        }

        public function getWidth() : int {
            return $this -> width;
        }

        public function getHeight() : int {
            return $this -> height;
        }

        public function getValueAt(Vector2 $position) : bool {
            return $this -> data[$position -> getY()][$position -> getX()];
        }

        public function setValueAt(Vector2 $position, bool $value) : self {
            $this -> data[$position -> getY()][$position -> getX()] = $value;
        }
    }
?>