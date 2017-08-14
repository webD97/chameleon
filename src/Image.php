<?php
    require_once("Color.php");
    require_once("ColorNotFoundException.php");

    class Image {
        private $imageResource;
        private $colors = array();

        public static function create(int $width, int $height) : self {
            $image = new Image();
            $image -> imageResource = imagecreatetruecolor($width, $height);
            return $image;
        }

        public static function fromFile() : self {
            $image = new Image();
            $image -> imageResource = imagecreatetruecolor($width, $height);
            return $image;
        }

        private function __construct() {}

        public function __destruct() {
            imagedestroy($this -> imageResource);
        }

        public function as($type) : bool{
            switch ($type) {
                case IMG_PNG:
                    return imagepng($this -> imageResource);
                    break;
            }
        }

        public function getImageResource() {
            return $this -> imageResource;
        }

        public function registerColor(string $name, Color $color) : bool {
            if (!isset($this -> colors[$name])) {
                return $this -> colors[$name] = imagecolorallocate($this -> imageResource, $color -> getRed(), $color -> getGreen(), $color -> getBlue());
            }
            else {
                throw new Exception("Color '$name' is already registered!");
            }
        }

        public function isColorRegistered(string $name) : bool {
            return isset($this -> colors[$name]);
        }

        private function getRegisteredColor(string $name) : int {
            if ($this -> isColorRegistered($name)) {
                return $this -> colors[$name];
            }
            else {
                return new ColorNotFoundException($color);
            }
        }

        public function fill(int $x, int $y, string $color) : bool {
            if ($this -> isColorRegistered($color)) {
                return imagefill($this -> imageResource, $x, $y, $this -> getRegisteredColor($color));
            }
            else {
                throw new ColorNotFoundException($color);
            }
        }

        public function setBackgroundColor(string $color) : bool {
            if ($this -> isColorRegistered($color)) {
                return imagefill($this -> imageResource, 0, 0, $this -> getRegisteredColor($color));
            }
            else {
                throw new ColorNotFoundException($color);
            }
        }
    }

    $image = Image::create(512, 512);
    $image -> registerColor("orange", Color::fromRGB(255, 128, 64));
    $image -> registerColor("blue", Color::fromRGB(64, 191, 255));

    $image -> setBackgroundColor("blue");
    $image -> fill(256, 256, "orange");

    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>