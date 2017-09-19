<?php
    declare(strict_types = 1);
    namespace Chameleon;

    use SplFixedArray;

    /**
     * Mask is a two-dimensional array based on SplFixedArray with helper functions
     * to map (x, y) coordinates to the one-dimensional internal SplFixedArray.
     * It stores boolean values (and `null`) to store the shapes of a Primitive.
     * `true` means permeable, `false`/`null` means impermeable.
     */
    class Mask extends SplFixedArray {

        /**
         * Stores Mask width
         *
         * @var int
         */
        private $width;

        /**
         * Stores Mask height
         *
         * @var int
         */
        private $height;

        /**
         * Class constructor
         *
         * @param int $width Mask width in px
         * @param int $height Mask height in px
         */
        public function __construct(int $width, int $height) {
            $this -> width = $width;
            $this -> height = $height;
            parent::__construct($this -> width * $this -> height);
        }

        /**
         * Get width of Mask
         *
         * @return int Width in px
         */
        public function getWidth() : int {
            return $this -> width;
        }

        /**
         * Get height of Mask.
         *
         * @return int Height in px
         */
        public function getHeight() : int {
            return $this -> height;
        }

        /**
         * Get value at (x, y) position of this Mask.
         *
         * @param int $xCoordinate
         * @param int $yCoordinate
         *
         * @return bool|null
         */
        public function getValueAt(int $xCoordinate, int $yCoordinate) : ?bool {
            return $this -> offsetGet($yCoordinate * $this -> width + $xCoordinate);
        }

        /**
         * Set value at (x, y) position of this Mask.
         *
         * @param int $xCoordinate The x coordinate
         * @param int $yCoordinate The y coordinate
         * @param bool|null $value The value
         *
         * @return self
         */
        public function setValueAt(int $xCoordinate, int $yCoordinate, ?bool $value) : self {
            $this -> offsetSet($yCoordinate * $this -> width + $xCoordinate, $value);
            return $this;
        }
    }
?>