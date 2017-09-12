<?php
    namespace Chameleon;

    /**
     * The Vector2 class represents a vector in a two-dimensional cartesian coordinate system.
     * It contains multiple methods to set and manipulate its coordinates.
     */
    class Vector2 {
        private $x;
        private $y;

        /**
         * Vector2 constructor.
         *
         * @param int $x The x coordinate
         * @param int $y The y coordinate
         */
        public function __construct(int $x, int $y) {
            $this -> x = $x;
            $this -> y = $y;
        }

        /**
         * Get the X coordinate of the vector.
         *
         * @return int The X coordinate
         */
        public function getX() : int {
            return $this -> x;
        }

        /**
         * Get the Y coordinate of the vector.
         *
         * @return int The Y coordinate
         */
        public function getY() : int {
            return $this -> y;
        }

        /**
         * Set the vector's X coordinate.
         *
         * @param int $x The x coordinate
         *
         * @return Vector2
         */
        public function setX(int $x) : self {
            $this -> x = $x;
            return $this;
        }

        /**
         * Set the vector's Y coordinate.
         *
         * @param int $y The y coordinate
         *
         * @return Vector2
         */
        public function setY(int $y) : self {
            $this -> y = $y;
            return $this;
        }

        /**
         * Increment the vector's x coordinate by $inc.
         *
         * @param int $inc Defaults to 1
         *
         * @return Vector2
         */
        public function incX(int $inc = 1) : self {
            $this -> x += $inc;
            return $this;
        }

        /**
         * Increment the vector's y coordinate by $inc.
         *
         * @param int $inc Defaults to 1
         *
         * @return Vector2
         */
        public function incY(int $inc = 1) : self {
            $this -> y += $inc;
            return $this;
        }

        /**
         * Decrement the vector's x coordinate by $dec.
         *
         * @param int $dec Defaults to 1
         *
         * @return Vector2
         */
        public function decX(int $dec = 1) : self {
            $this -> x -= $dec;
            return $this;
        }

        /**
         * Decrement the vector's y coordinate by $dec.
         *
         * @param int $dec Defaults to 1
         *
         * @return Vector2
         */
        public function decY(int $dec = 1) : self {
            $this -> y -= $dec;
            return $this;
        }

        /**
         * Returns a string representation of the vector
         *
         * @return string A string formatted as `(x, y)`
         */
        public function __toString() : string {
            return "(" . $this -> x . ", " . $this -> y . ")";
        }
    }
?>