<?php
    declare(strict_types = 1);
    namespace Chameleon;

    use Chameleon\Exceptions\ColorNotFoundException;

    use Chameleon\Filters\IFilter;
    use Chameleon\Primitives\IPrimitive;
    use Chameleon\Primitives\Rectangle;
    use Chameleon\Patterns\IPattern;
    use Chameleon\Colors\IColor;
    use Chameleon\Colors\RGBColor;
    use Exception;

    /**
     * Image class
     */
    class Image {
        private $imageResource;
        private $colors = array();

        /**
         * Create an image from scratch
         *
         * @api
         *
         * @param int $width width in px
         * @param int $height height in px
         * @return self
         */
        public static function create(int $width, int $height) : self {
            $image = new Image(imagecreatetruecolor($width, $height));
            return $image;
        }


        /**
         * Load an image from a file
         *
         * @api
         *
         * @param string $path Path to the file
         *
         * @return Image
         * @throws Exception If file not found
         */
        public static function fromFile(string $path) : self {
            if (file_exists($path)) {
                $rawImage = null;
                switch (mime_content_type($path)) {
                    case "image/png":
                        $rawImage = imagecreatefrompng($path);
                        break;
                    case "image/jpeg":
                        $rawImage = imagecreatefromjpeg($path);
                        break;
                    case "image/gif":
                        $rawImage = imagecreatefromgif($path);
                        break;
                }
                    
                if (!imageistruecolor($rawImage)) {
                    imagepalettetotruecolor($rawImage);
                }
                    
                return new Image($rawImage);
            }

            throw(new Exception("File $path not found."));
        }


        /**
         * Image constructor. Must not be instantiated from outside.
         *
         * @internal
         *
         * @param $imageResource resource The GD image resource
         */
        private function __construct($imageResource) {
            $this -> imageResource = $imageResource;
        }

        public function __destruct() {
            foreach ($this -> colors as $color) {
                imagecolordeallocate($this -> imageResource, $color);
            }
            
            imagedestroy($this -> imageResource);
        }

        /**
         * Get image width in px
         *
         * @api
         *
         * @return int The width
         */
        public function getWidth() : int {
            return imagesx($this -> imageResource);
        }

        /**
         * Get image height in px
         *
         * @api
         *
         * @return int The height
         */
        public function getHeight() : int {
            return imagesy($this -> imageResource);
        }

        /**
         * Output image
         *
         * @api
         *
         * @param  $type int One of the supported IMG_* constants
         *
         * @return bool
         * @throws Exception If using an unsupported image file format
         */
        public function outputAs(int $type) : bool {
            switch ($type) {
                case IMG_PNG:
                    return imagepng($this -> imageResource);
                    break;

                case IMG_JPG:
                case IMG_JPEG:
                    return imagejpeg($this -> imageResource);
                    break;
                case IMG_GIF:
                    return imagegif($this -> imageResource);
                    break;
            }

            throw(new Exception("Unsupported image file format."));
        }

        /**
         * Get the underlying GD image resource
         *
         * @api
         *
         * @return resource
         */
        public function getImageResource() {
            return $this -> imageResource;
        }

        /**
         * Register a color with this image
         *
         * @api
         *
         * @param IColor $color The color
         * @return int The internal GD color id
         */
        public function registerColor(IColor $color) : int {
            if (!isset($this -> colors[$color -> __toString()])) {
                $rgba = $color -> getRGBA();
                $ColorId = imagecolorallocatealpha($this -> imageResource, $rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue(), $rgba -> getAlpha());
                if ($ColorId !== false) {
                    $this -> colors[$color -> __toString()] = $ColorId;
                    return $ColorId;
                }
                return -1;
            }
            return -1;
        }

        /**
         * Check if a color is registered with this image
         *
         * @api
         *
         * @param IColor $color The color
         * @return bool
         */
        public function isColorRegistered(IColor $color) : bool {
            return isset($this -> colors[$color -> __toString()]);
        }

        /**
         * Get the underlying GD color
         *
         * @api
         *
         * @param IColor $color The high level color
         *
         * @return int The low level color
         * @throws ColorNotFoundException If color is not registered with this image
         */
        public function getRegisteredColor(IColor $color) : int {
            if ($this -> isColorRegistered($color)) {
                return $this -> colors[$color -> __toString()];
            }
            else {
                throw new ColorNotFoundException($color);
            }
        }

        /**
         * Register a color only if it has not been registered yet
         *
         * @param IColor $color
         * @return bool was unknown?
         *
         * @deprecated
         */
        public function registerColorIfUnknown(IColor $color) : bool {
            if (!$this -> isColorRegistered($color)) {
                $this -> registerColor($color);
                return true;
            }

            return false;
        }

        /**
         * Fill the whole image with the given pattern.
         *
         * Only call this before drawing other elements onto the image unless you want them to be affected
         * by the pattern.
         *
         * @api
         *
         * @param IPattern $pattern The pattern
         * @return void
         */
        public function setBackgroundPattern(IPattern $pattern) : void {
            $rectangle = new Rectangle(new Vector2(0, 0), $this -> getWidth(), $this -> getHeight());
            $rectangle -> setBackgroundPattern($pattern);
            $rectangle -> draw($this);
        }

        /**
         * Get color of a specific pixel
         *
         * @api
         *
         * @param int $xCoordinate X coordinate
         * @param int $yCoordinate Y coordinate
         *
         * @return RGBColor The color
         */
        public function getPixel(int $xCoordinate, int $yCoordinate) : RGBColor {
            $rgb = imagecolorat($this -> imageResource, $xCoordinate, $yCoordinate);
            $red = ($rgb >> 16) & 0x0000FF;
            $green = ($rgb >> 8) & 0x0000FF;
            $blue = $rgb & 0x0000FF;

            return new RGBColor($red, $green, $blue);
        }

        /**
         * Set the color of a specific pixel.
         * Make sure that the color is registered on the image! No additional tests will be performed!
         *
         * @api
         *
         * @param int $xCoordinate The x coordinate
         * @param int $yCoordinate The y coordinate
         * @param IColor $color The color
         *
         * @return Image
         */
        public function setPixel(int $xCoordinate, int $yCoordinate, IColor $color) : self {
            imagesetpixel($this -> imageResource, $xCoordinate, $yCoordinate, $this -> colors[$color -> __toString()]);
            return $this;
        }

        /**
         * Apply a filter to the image.
         *
         * @api
         *
         * @param IFilter $filter The filter to be applied
         *
         * @return Image self
         */
        public function filter(IFilter $filter) : Image {
            $filter -> apply($this);
            return $this;
        }

        /**
         * Draw one or more primitives onto the image
         *
         * @api
         *
         * @param IPrimitive|IPrimitive[] ...$primitives Any number of primitives
         *
         * @return Image
         */
        public function draw(IPrimitive ...$primitives) : self {
            foreach ($primitives as $primitive) {
                $primitive -> draw($this);
            }

            return $this;
        }
    }
?>