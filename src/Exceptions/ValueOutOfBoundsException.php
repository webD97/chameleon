<?php
    namespace Chameleon\Exceptions;

    use Exception;

    class ValueOutOfBoundsException extends Exception {
        public function __construct(string $valueName, float $value, float $min, float $max) {
            $this -> message = "Value '$value' for '$valueName' is not within the allowed interval [$min, $max]!";
        }
    }
?>