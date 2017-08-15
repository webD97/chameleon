<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\HSVColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class HSVColorTest extends TestCase {

        private $color;

        protected function setUp() {
            $this -> color = new HSVColor(0, 1, 0.5);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("hue", $this -> color);
            $this -> assertObjectHasAttribute("saturation", $this -> color);
            $this -> assertObjectHasAttribute("value", $this -> color);
        }

        public function test__toString() {
            $this -> assertEquals("hsv(0, 1, 0.5)", $this -> color -> __toString());
        }

        public function testGetHue() {
            $this -> assertEquals(0, $this -> color -> getHue());
        }

        public function testGetSaturation() {
            $this -> assertEquals(1, $this -> color -> getSaturation());
        }

        public function testGetValue() {
            $this -> assertEquals(0.5, $this -> color -> getValue());
        }

        public function testSetHue() {
            $this -> color -> setHue(90);
            $this -> assertEquals(90, $this -> color -> getHue());
        }

        public function testSetHueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(360);
        }

        public function testSetHueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(-1);
        }

        public function testSetSaturation() {
            $this -> color -> setSaturation(0);
            $this -> assertEquals(0, $this -> color -> getSaturation());
        }

        public function testSetSaturationTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(1.1);
        }

        public function testSetSaturationTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(-0.1);
        }

        public function testSetValue() {
            $this -> color -> setValue(0.25);
            $this -> assertEquals(0.25, $this -> color -> getValue());
        }

        public function testSetValueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setValue(1.1);
        }

        public function testSetValueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setValue(-0.1);
        }
    }
?>