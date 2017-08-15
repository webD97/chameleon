<?php
    use PHPUnit\Framework\TestCase;
    
    use Chameleon\Exceptions\ColorNotFoundException;
    
    final class ColorNotFoundExceptionTest extends TestCase {
        public function testException() {
            $this -> expectExceptionMessage("Color 'red' is not registered on this image!");
            throw new ColorNotFoundException("red");
        }
    }
?>