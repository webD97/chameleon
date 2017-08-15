<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\RGBColor;

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

        public function testSetGreen() {
            $this -> color -> setGreen(0);
            $this -> assertEquals(0, $this -> color -> getGreen());
        }

        public function testSetBlue() {
            $this -> color -> setBlue(0);
            $this -> assertEquals(0, $this -> color -> getBlue());
        }
    }
?>