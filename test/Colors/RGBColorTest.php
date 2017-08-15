<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\RGBColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class RGBColorTest extends TestCase {

        private $color;

        protected function setUp() {
            $this -> color = new RGBColor(255, 127, 63);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("red", $this -> color);
            $this -> assertObjectHasAttribute("green", $this -> color);
            $this -> assertObjectHasAttribute("blue", $this -> color);
        }

        public function test__toString() {
            $this -> assertEquals("rgb(255, 127, 63)", $this -> color -> __toString());
        }

        public function testGetRed() {
            $this -> assertEquals(255, $this -> color -> getRed());
        }

        public function testGetGreen() {
            $this -> assertEquals(127, $this -> color -> getGreen());
        }

        public function testGetBlue() {
            $this -> assertEquals(63, $this -> color -> getBlue());
        }

        public function testSetRed() {
            $this -> color -> setRed(0);
            $this -> assertEquals(0, $this -> color -> getRed());
        }

        public function testSetRedTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(256);
        }

        public function testSetRedTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(-1);
        }

        public function testSetGreen() {
            $this -> color -> setGreen(0);
            $this -> assertEquals(0, $this -> color -> getGreen());
        }

        public function testSetGreenTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(256);
        }

        public function testSetGreenTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(-1);
        }

        public function testSetBlue() {
            $this -> color -> setBlue(0);
            $this -> assertEquals(0, $this -> color -> getBlue());
        }

        public function testSetBlueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(256);
        }

        public function testSetBlueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(-1);
        }
    }
?>