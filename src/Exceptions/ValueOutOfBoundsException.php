<?php
    namespace Chameleon\Exceptions;

    class ColorNotFoundException extends \Exception {
        public function __construct(string $valueName, float $value, float $min, float $max) {
            $this -> message = "Value '$valueName' is not within the allowed interval [$min, $max]";
        }
    }
?>