<?php
    namespace Chameleon;

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

        public function setX(int $x) : self {
            $this -> x = $x;
            return $this;
        }

        public function setY(int $y) : self {
            $this -> y = $y;
            return $this;
        }

        public function incX(int $inc = 1) : self {
            $this -> x += $inc;
            return $this;
        }

        public function incY(int $inc = 1) : self {
            $this -> y += $inc;
            return $this;
        }

        public function decX(int $dec = 1) : self {
            $this -> x -= $dec;
            return $this;
        }

        public function decY(int $dec = 1) : self {
            $this -> y -= $dec;
            return $this;
        }

        public function __toString() : string {
            return "(" . $this -> x . ", " . $this -> y . ")";
        }
    }
?>