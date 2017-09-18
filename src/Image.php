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
    use Chameleon\Transformations\FlipMode;
    use Chameleon\Transformations\RotateMode;
    use Chameleon\Transformations\ScaleMode;
    use Exception;
    use phpDocumentor\Console\Output\Output;

    /**
     * The Image class encapsulates a GD image resource and provides methods for manipulating images.
     *
     * Images can be created from scratch or read from a file. New images can be initialised with a background color,
     * which can also be transparent. There are methods for basic image manipulation, like scaling, cropping, merging,
     * flipping and rotating. Direct pixel manipulation is possible using the getPixel() and setPixel() methods. Image
     * filtering is possible using the filter() method. Primitives can be drawn onto the image with the draw() method.
     *
     * @package Chameleon
     */
    class Image {
        private $imageResource;
        /**
         * @var IColor This color is used as initial background color when creating an image, or if a certain method
         * needs a background color as parameter.
         */
        private $backgroundColor;

        /**
         * @var array This array stores all colors used in this image.
         */
        private $colorPalette = [];

        /**
         * Create an image from scratch.
         *
         * The image is initialized with a given size and an optional background color.
         *
         * @api
         *
         * @param int $width Image width in px
         * @param int $height Image height in px
         * @param IColor|null $backgroundColor (optional) Background color, defaults to ColorFactory::black()
         *
         * @return Image
         *
         */
        public static function create(int $width, int $height, IColor $backgroundColor = null) : self {
            $backgroundColor = $backgroundColor ?? ColorFactory::black();

            $image = new Image(imagecreatetruecolor($width, $height));
            $image -> backgroundColor = $backgroundColor;

            unset($backgroundColor);

            imagealphablending($image -> imageResource, false);
            imagesavealpha($image -> imageResource, true);

            $image -> registerColor($image -> backgroundColor);
            imagefill($image -> imageResource, 0, 0, $image -> backgroundColor -> getInt());

            imagealphablending($image -> imageResource, true);

            return $image;
        }


        /**
         * Load an image from a file.
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

                $image = new Image($rawImage);
                $image -> backgroundColor = ColorFactory::black();

                return $image;
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

        /**
         * Destructor.
         *
         * @internal
         */
        public function __destruct() {
            foreach ($this -> colorPalette as $color) {
                imagecolordeallocate($this -> imageResource, $color);
            }
            
            imagedestroy($this -> imageResource);
        }


        /**
         * Get the background color.
         *
         * The background color can be set when creating new images. For images read from a file, it is
         * ColorFactory::black().
         *
         * @api
         *
         * @return IColor
         */
        public function getBackgroundColor() : IColor {
            return $this -> backgroundColor;
        }

        /**
         * Get image width in px.
         *
         * @api
         *
         * @return int The width
         */
        public function getWidth() : int {
            return imagesx($this -> imageResource);
        }

        /**
         * Get image height in px.
         *
         * @api
         *
         * @return int The height
         */
        public function getHeight() : int {
            return imagesy($this -> imageResource);
        }

        /**
         * Enable alpha blending for this image.
         *
         * If alpha blending is turned on, colors are drawn "on top" of existing ones in this pixel. If the new color
         * has transparency, the old color and the new color will blend.
         * If alpha blending is turned off, colors will replace existing ones in this pixel, regardless of any
         * transparency.
         *
         * @api
         *
         * @return Image
         */
        public function enableAlphaBlending() : self {
            imagealphablending($this -> imageResource, true);

            return $this;
        }

        /**
         * Disable alpha blending for this image.
         *
         * If alpha blending is turned on, colors are drawn "on top" of existing ones in this pixel. If the new color
         * has transparency, the old color and the new color will blend.
         * If alpha blending is turned off, colors will replace existing ones in this pixel, regardless of any
         * transparency.
         *
         * @api
         *
         * @return Image
         */
        public function disableAlphaBlending() : self {
            imagealphablending($this -> imageResource, false);

            return $this;
        }

        /**
         * Output the image to a file.
         *
         * @api
         *
         * @param $type int One of the supported IMG_* constants
         * @param array $options An array of options specific for the desired file format.
         * @param string $file (optional) Write to a file, defaults to "php://output".
         *
         * @return bool
         * @throws Exception If using an unsupported image file format
         */
        public function outputFile(int $type, array $options = [], string $file = "php://output") : bool {
            switch ($type) {
                case IMG_PNG:
                    $quality = $options["compression"] ?? 0;
                    $filters = $options["filters"] ?? PNG_NO_FILTER;
                    $interlace = $options["interlace"] ?? false;

                    imageinterlace($this -> imageResource, (int) $interlace);
                    return imagepng($this -> imageResource, $file, $quality, $filters);
                    break;

                case IMG_JPG:
                case IMG_JPEG:
                    $quality = $options["quality"] ?? 75;
                    $interlace = $options["interlace"] ?? false;

                    imageinterlace($this -> imageResource, (int) $interlace);
                    return imagejpeg($this -> imageResource, $file, $quality);
                    break;
                case IMG_GIF:
                    return imagegif($this -> imageResource);
                    break;
            }

            throw new Exception("Unsupported image file format.");
        }

        /**
         * @param $type int One of the supported IMG_* constants
         * @param array $options An array of options specific for the desired file format.
         *
         * @return string
         */
        public function getBase64(int $type, array $options = []) : string {
            ob_start();
            $this -> outputFile($type, $options);
            $imageData = ob_get_contents();
            ob_end_clean();

            return base64_encode($imageData);
        }

        /**
         * Get the underlying GD image resource.
         *
         * @api
         *
         * @return resource
         */
        public function getImageResource() {
            return $this -> imageResource;
        }

        /**
         * Register a color with this image.
         *
         * @api
         *
         * @param IColor $color The color
         * @return int The internal GD color id
         */
        public function registerColor(IColor $color) : int {
            $rgba = $color -> getRGBA();
            $colorId = $color -> getInt();

            if (imagecolorallocatealpha($this -> imageResource, $rgba -> getRed(), $rgba -> getGreen(), $rgba -> getBlue(), $rgba -> getAlpha()) !== false) {
                array_push($this -> colorPalette, $colorId);
                return $colorId;
            }

            return -1;
        }

        /**
         * Check if a color is registered with this image.
         *
         * @api
         *
         * @param IColor $color The color
         * @return bool
         */
        public function isColorRegistered(IColor $color) : bool {
            return in_array($color -> getInt(), $this -> colorPalette);
        }

        /**
         * Fill the whole image with the given pattern.
         *
         * The pattern is drawn on top of everything else. Only call this before drawing other elements onto the image
         * unless you want them to be affected by the pattern.
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
         * Get color of a specific pixel.
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
         *
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
            imagesetpixel($this -> imageResource, $xCoordinate, $yCoordinate, $color -> getInt());
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
         * Flip the image.
         *
         * @api
         *
         * @param FlipMode $flipMode FlipMode::HORIZONTAL, FlipMode::VERTICAL or FlipMode::BOTH
         *
         * @return Image
         */
        public function flip(FlipMode $flipMode) : self {
            imageflip($this-> imageResource, $flipMode -> value());

            return $this;
        }


        /**
         * Scale the image.
         *
         * @api
         *
         * @param int $width New width
         * @param int $height (optional) New height. If omitted or negative, the aspect ratio will be preserved.
         * @param bool $override (optional) If true, the existing image will be overridden, otherwise a new Image will be returned.
         * @param ScaleMode|null $mode (optional) The desired interpolation algorithm, default: ScaleMode::BICUBIC_FIXED().
         *
         * @return Image
         * @throws Exception If the call to imagescale() fails
         */
        public function scale(int $width, int $height = -1, bool $override = true, ScaleMode $mode = null) : self {
            $mode = $mode ?? ScaleMode::BICUBIC_FIXED();

            $newImage = imagescale($this -> imageResource, $width, $height, $mode -> value());

            if ($newImage !== false) {
                if ($override == true) {
                    $this -> imageResource = $newImage;
                    return $this;
                }

                return new Image($newImage);
            }

            throw new Exception("Image scale failed.");
        }

        /**
         * Crop the image to a given box.
         *
         * @api
         *
         * @param Vector2 $start The top left start position.
         * @param Vector2 $end The bottom right end position.
         * @param bool $override (optional) If true, the existing image will be overridden, otherwise a new Image will be returned.
         *
         * @return Image
         * @throws Exception If call to imagecrop() fails
         */
        public function crop(Vector2 $start, Vector2 $end, bool $override = true) : self {
            $crop = [
              "x" => $start -> getX(),
              "y" => $start -> getY(),
              "width" => $end -> getX() - $start -> getX(),
              "height" => $end -> getY() - $start -> getY()
            ];

            $newImage = imagecrop($this -> imageResource, $crop);

            if ($newImage !== false) {
                if ($override == true) {
                    $this -> imageResource = $newImage;
                    return $this;
                }

                return new Image($newImage);
            }

            throw new Exception("Image crop failed.");
        }

        /**
         * Rotate the image.
         *
         * @api
         *
         * @param int $degrees Degrees [0, 360]
         * @param RotateMode|null $rotateMode (optional) Rotation orientation, defaults to RotateMode::CLOCKWISE()
         * @param IColor|null $backgroundColor (optional) The background color for areas that are not covered by the image, defaults to ColorFactory::black()
         * @param bool $override (optional) If true, the existing image will be overridden, otherwise a new Image will be returned.
         *
         * @return Image
         * @throws Exception If call to imagerotate() fails
         */
        public function rotate(int $degrees, RotateMode $rotateMode = null, IColor $backgroundColor = null, bool $override = true) : self {
            $rotateMode = $rotateMode ?? RotateMode::CLOCKWISE();
            $backgroundColor = $backgroundColor ?? $this -> backgroundColor;

            // imagerotate() interprets the degrees as counter clockwise, so we need to invert the value for clockwise.
            $degrees %= 360;
            if ($rotateMode === RotateMode::CLOCKWISE()) {
                $degrees = 360 - $degrees;
            }

            $this -> registerColor($backgroundColor);
            $newImage = imagerotate(
                    $this -> imageResource,
                    $degrees,
                    $backgroundColor -> getInt(),
                    1
            );

            if ($newImage !== false) {
                if ($override == true) {
                    $this -> imageResource = $newImage;
                    return $this;
                }

                return new Image($newImage);
            }

            throw new Exception("Image rotation failed.");
        }

        /**
         * Draw one or more primitives onto the image.
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