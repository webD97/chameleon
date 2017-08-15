<?php
    class Vector2 {
        private $x;
        private $y;

        public function __construct(int $x, int $y) {
            $this -> x = $x;
            $this -> y = $y;
        }

        public function getX() : int {
            return $this -> x;
        }

        public function getY() : int {
            return $this -> y;
        }

        public function setX(int $x) {
            $this -> x = $x;
        }

        public function setY(int $y) {
            $this -> y = $y;
        }

        public function __toString() : string {
            return "(" . $this -> x . ", " . $this -> y . ")";
        }
    }
?>