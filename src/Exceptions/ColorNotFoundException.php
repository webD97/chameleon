<?php
    namespace Chameleon\Exceptions;

    use Exception;

    class ColorNotFoundException extends Exception {
        public function __construct($color) {
            $this -> message = "Color '$color' is not registered on this image!";
        }
    }
?>