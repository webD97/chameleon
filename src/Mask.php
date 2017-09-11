<?php
    declare(strict_types = 1);
    namespace Chameleon;

    use SplFixedArray;

    /**
     * Mask is a two-dimensional array based on SplFixedArray with helpher functions
     * to map (x, y) coordinates to the one-dimensional internal SplFixedArray
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
         * @param int $x
         * @param int $y
         * @return bool|null
         */
        public function getValueAt(int $x, int $y) : ?bool {
            return $this -> offsetGet($y * $this -> width + $x);
        }

        /**
         * Set value at (x, y) position of this Mask.
         *
         * @param int $x The x coordinate
         * @param int $y The y coordinate
         * @param bool|null $value The value
         * @return self
         */
        public function setValueAt(int $x, int $y, ?bool $value) : self {
            $this -> offsetSet($y * $this -> width + $x, $value);
            return $this;
        }
    }
?>