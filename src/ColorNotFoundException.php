<?php
    class ColorNotFoundException extends Exception {
        public function __construct($color) {
            $this -> message = "Color is '$color' not registered on this image!";
        }
    }
?>