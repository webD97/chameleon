<?php
    namespace Chameleon;

    use Chameleon\Primitives\IPrimitive;
    use Chameleon\Colors\IColor;

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

            foreach ($this -> colors as $color) {
                imagecolordeallocate($this -> imageResource, $color);
            }
        }

        public function getWidth() : int {
            return imagesx($this -> imageResource);
        }

        public function getHeight() : int {
            return imagesx($this -> imageResource);
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

        public function registerColor(string $name, IColor $color) : bool {
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

        public function setBackgroundColor(string $color) : bool {
            if ($this -> isColorRegistered($color)) {
                return imagefilledrectangle($this -> imageResource, 0, 0, $this -> getWidth(), $this -> getHeight(), $this -> getRegisteredColor($color));
            }
            else {
                throw new ColorNotFoundException($color);
            }
        }

        public function draw(IPrimitive $primitive) {
            $primitive -> draw($this -> imageResource);
        }
    }
?>