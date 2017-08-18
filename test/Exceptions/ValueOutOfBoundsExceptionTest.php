<?php
    namespace Chameleon\Exceptions;

    use PHPUnit\Framework\TestCase;
    
    use Chameleon\Exceptions\ValueOutOfBoundsException;
    
    final class ValueOutOfBoundsExceptionTest extends TestCase {
        public function testException() {
            $this -> expectExceptionMessage("Value '2' for 'saturation' is not within the allowed interval [0, 1]!");
            throw new ValueOutOfBoundsException("saturation", 2, 0, 1);
        }
    }
?>