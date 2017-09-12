<?php
    declare(strict_types = 1);
    namespace Chameleon\Patterns;

    use SplFixedArray;
    use Chameleon\Colors\IColor;
    use Chameleon\Colors\RGBAColor;
    use Chameleon\Patterns\IPattern;

    /**
     * Grid pattern. Can be customized in width, height, x ofset and y offset.
     */
    class Grid extends Pattern {
        private $width;
        private $height;
        private $offsetX;
        private $offsetY;

        /**
         * Class constructor
         *
         * @param int $colors Number of colors to be generated
         * @param int $alpha Optional alpha channel value for the colors
         */
        public function __construct(IColor $background, IColor $line, int $width = 2, int $height = 2, int $offsetX = 0, int $offsetY = 0) {
            parent::__construct(2);

            $this -> setColor(0, $background);
            $this -> setColor(1, $line);

            $this -> setWidth($width);
            $this -> setHeight($height);

            $this -> setOffsetX($offsetX);
            $this -> setOffsetY($offsetY);
        }

        /**
         * Get horizontal spacing of lines
         *
         * @return int Horizontal spacing in px
         */
        public function getWidth() : int {
            return $this -> width;
        }

        /**
         * Set horizontal spacing of lines
         *
         * @param int $width Horizontal spacing in px
         * @return self
         */
        public function setWidth(int $width) : self {
            if ($width > 0) {
                $this -> width = $width;
            }
            return $this;
        }

        /**
         * Get vertical spacing of lines
         *
         * @return int Vertical spacing in px
         */
        public function getHeight() : int {
            return $this -> height;
        }

        /**
         * Set veritcal spacing of lines
         *
         * @param int $width Vertical spacing in px
         * @return self
         */
        public function setHeight(int $height) : self {
            if ($height > 0) {
                $this -> height = $height;
            }
            return $this;
        }

        /**
         * Get x-axis offset
         *
         * @return int X offset in px
         */
        public function getOffsetX() : int {
            return $this -> offsetX;
        }

        /**
         * Set x-axis offset
         * 
         * x-axis offset moves the whole grid to the left/right
         *
         * @return self
         */
        public function setOffsetX(int $offset) : self {
            $this -> offsetX = $offset;
            return $this;
        }

        /**
         * Get y-axis offset
         *
         * @return int Y offset in px
         */
        public function getOffsetY() : int {
            return $this -> offsetY;
        }

        /**
         * Set y-axis offset
         * 
         * y-axis offset moves the whole grid up/down
         *
         * @return self
         */
        public function setOffsetY(int $offset) : self {
            $this -> offsetY = $offset;
            return $this;
        }

        /**
         * Get background color
         *
         * @return IColor
         */
        public function getBackgroundColor() : IColor {
            return $this -> offsetGet(0);
        }

        /**
         * Set background color
         *
         * @param IColor $color
         * @return void
         */
        public function setBackgroundColor(IColor $color) {
            $this -> offsetSet(0, $color);
        }

        /**
         * Get grid line color
         *
         * @return IColor
         */
        public function getLineColor() : IColor {
            return $this -> offsetGet(1);
        }

        /**
         * Set grid line color
         *
         * @param IColor $color
         * @return void
         */
        public function setLineColor(IColor $color) {
            $this -> offsetSet(1, $color);
        }

        /**
         * Get color in grid at the given position
         * 
         * By default, all pixels have the background color, every nth pixel has the line color
         *
         * @param int $x x coordinate
         * @param int $y y coordinate
         * @return IColor The color for the given position
         */
        public function getColorAt(int $x, int $y) : IColor {
            if (($x - $this -> offsetX) % $this -> width == 0 || ($y - $this -> offsetY) % $this -> height == 0) {
                return $this -> getColor(1);                
            }
            return $this -> getColor(0);
        }
    }
?>