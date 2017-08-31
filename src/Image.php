<?php
    declare(strict_types = 1);
    namespace Chameleon;

    use Chameleon\Exceptions\ColorNotFoundException;

    use Chameleon\Primitives\IPrimitive;
    use Chameleon\Primitives\Rectangle;
    use Chameleon\Patterns\IPattern;
    use Chameleon\Colors\IColor;
    use Chameleon\Colors\RGBColor;

    class Image {
        private $imageResource;
        private $colors = array();

        /**
         * Create an image from scratch
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
         * @todo Actually load a file
         * @return self
         */
        public static function fromFile(string $path) : self {
            if (file_exists($path)) {
                $rawImage;

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

            // TODO: Do somthing useful if file not found
            return Image::create(1, 1);
        }

        /**
         * @ignore Class must not be instantiated from outside
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
         * @return int The width
         */
        public function getWidth() : int {
            return imagesx($this -> imageResource);
        }

        /**
         * Get image height in px
         *
         * @return int The height
         */
        public function getHeight() : int {
            return imagesy($this -> imageResource);
        }

        /**
         * Output image
         * 
         *
         * @param  $type One of the supported IMG_* constants, for now only IMG_PNG
         * @return bool
         */
        public function as($type) : bool{
            switch ($type) {
                case IMG_PNG:
                    return imagepng($this -> imageResource);
                    break;
            }
        }

        /**
         * Get the underlying GD image resource
         *
         * @return void
         */
        public function getImageResource() {
            return $this -> imageResource;
        }

        /**
         * Register a color with this image
         *
         * @param IColor $color The color
         * @return void
         */
        public function registerColor(IColor $color) {
            if (!isset($this -> colors[$color -> __toString()])) {
                $rgba = $color -> getRGBA();
                $id = imagecolorallocatealpha($this -> imageResource, $rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue(), $rgba -> getAlpha());
                if ($id !== false) {
                    $this -> colors[$color -> __toString()] = $id;
                    return $id;
                }
                return -1;
            }
        }

        /**
         * Check if a color is registered with this image
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
         * @param IColor $color The high level color
         * @return int The low level color
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
         */
        public function registerColorIfUnknown(IColor $color) : bool {
            if (!$this -> isColorRegistered($color)) {
                $this -> registerColor($color);
                return true;
            }

            return false;
        }

        public function setBackgroundPattern(IPattern $pattern) {

            $rectangle = new Rectangle(new Vector2(0, 0), $this -> getWidth(), $this -> getHeight());
            $rectangle -> setBackgroundPattern($pattern);
            $rectangle -> draw($this);
        }

        /**
         * Get color of a specific pixel
         *
         * @param int $x X coordinate
         * @param int $y Y coordinate
         * @return RGBColor The color
         */
        public function getPixel(int $x, int $y) : RGBColor {
            $rgb = imagecolorat($this -> imageResource, $x, $y);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;

            return new RGBColor($r, $g, $b);
        }

        /**
         * Set the color of a specific pixel.
         * Make sure that the color is registered on the image! No additional tests will be performed!
         *
         * @param Vector2 $position
         * @param IColor $color
         * @return self
         */
        public function setPixel(int $x, int $y, IColor $color) : self {
            imagesetpixel($this -> imageResource, $x, $y, $this -> colors[$color -> __toString()]);
            return $this;
        }

        /**
         * Draw one or more primitives onto the image
         *
         * @param IPrimitive ...$primitives The primitives
         * @return self
         */
        public function draw(IPrimitive ...$primitives) : self {
            foreach ($primitives as $primitive) {
                $primitive -> draw($this);
            }

            return $this;
        }
    }
?>