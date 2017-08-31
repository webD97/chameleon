<?php
    declare(strict_types = 1);
    namespace Chameleon;

    use Chameleon\Vector2;

    class Mask {
        private $data;

        public function __construct(int $width, int $height, bool $initializeWith = false) {
            $this -> width = $width;
            $this -> height = $height;
            $size = $width * $height;
            $this -> data = new \SplFixedArray($size);

            for ($i = 0; $i < $size; $i++) {
                $this -> data -> offsetSet($i, $initializeWith);
            }
        }

        public function getWidth() : int {
            return $this -> width;
        }

        public function getHeight() : int {
            return $this -> height;
        }

        public function getValueAt(int $index) : bool {
            return $this -> data -> offsetGet($index);
        }

        public function setValueAt(int $index, bool $value) : self {
            $this -> data -> offsetSet($index, $value);
            return $this;
        }
    }
?>