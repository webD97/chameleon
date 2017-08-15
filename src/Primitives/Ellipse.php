<?php
    namespace Primitives;
    
    require_once(__DIR__ . "/../Vector2.php");
    require_once(__DIR__ . "/../Image.php");
    require_once(__DIR__ . "/Primitive.php");

    class Ellipse extends Primitive {
        private $width;
        private $height;

        public function __construct(\Vector2 $point, int $width, int $height) {
            $this -> point = $point;
            $this -> width = $width;
            $this -> height = $height;
        }

        public function draw($imageResource) {
            imageellipse($imageResource, 
                $this -> point -> getX(),
                $this -> point -> getY() ,
                $this -> width,
                $this -> height,
                imagecolorallocate($imageResource, 255, 255, 255)
            );
        }
    }
?>