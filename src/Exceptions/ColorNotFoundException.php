<?php
    namespace Chameleon\Exceptions;

    class ColorNotFoundException extends \Exception {
        public function __construct($color) {
            $this -> message = "Color '$color' is not registered on this image!";
        }
    }
?>