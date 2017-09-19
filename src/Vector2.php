<?php
    namespace Chameleon;

    /**
     * The Vector2 class represents a vector in a two-dimensional cartesian coordinate system.
     * It contains multiple methods to set and manipulate its coordinates.
     */
    class Vector2 {
        private $xCoordinate;
        private $yCoordinate;

        /**
         * Vector2 constructor.
         *
         * @param int $x The x coordinate
         * @param int $y The y coordinate
         */
        public function __construct(int $x, int $y) {
            $this -> xCoordinate = $x;
            $this -> yCoordinate = $y;
        }

        /**
         * Get the X coordinate of the vector.
         *
         * @return int The X coordinate
         */
        public function getX() : int {
            return $this -> xCoordinate;
        }

        /**
         * Get the Y coordinate of the vector.
         *
         * @return int The Y coordinate
         */
        public function getY() : int {
            return $this -> yCoordinate;
        }

        /**
         * Set the vector's X coordinate.
         *
         * @param int $xCoordinate The x coordinate
         *
         * @return Vector2
         */
        public function setX(int $xCoordinate) : self {
            $this -> xCoordinate = $xCoordinate;
            return $this;
        }

        /**
         * Set the vector's Y coordinate.
         *
         * @param int $yCoordinate The y coordinate
         *
         * @return Vector2
         */
        public function setY(int $yCoordinate) : self {
            $this -> yCoordinate = $yCoordinate;
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
            $this -> xCoordinate += $inc;
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
            $this -> yCoordinate += $inc;
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
            $this -> xCoordinate -= $dec;
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
            $this -> yCoordinate -= $dec;
            return $this;
        }

        /**
         * Returns a string representation of the vector
         *
         * @return string A string formatted as `(x, y)`
         */
        public function __toString() : string {
            return sprintf("(%d, %d)", $this -> xCoordinate, $this -> yCoordinate);
        }
    }
?>