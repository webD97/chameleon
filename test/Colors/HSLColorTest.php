<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\HSLColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class HSLColorTest extends TestCase {

        private $color;

        protected function setUp() {
            $this -> color = new HSLColor(0, 1, 0.5);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("hue", $this -> color);
            $this -> assertObjectHasAttribute("saturation", $this -> color);
            $this -> assertObjectHasAttribute("lightness", $this -> color);
        }

        public function test__toString() {
            $this -> assertEquals("hsl(0, 1, 0.5)", $this -> color -> __toString());
        }

        public function testGetHue() {
            $this -> assertEquals(0, $this -> color -> getHue());
        }

        public function testGetSaturation() {
            $this -> assertEquals(1, $this -> color -> getSaturation());
        }

        public function testGetLightness() {
            $this -> assertEquals(0.5, $this -> color -> getLightness());
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

        public function testSetLightness() {
            $this -> color -> setLightness(0.25);
            $this -> assertEquals(0.25, $this -> color -> getLightness());
        }

        public function testsetLightnessTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setLightness(1.1);
        }

        public function testsetLightnessTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setLightness(-0.1);
        }

        public function testRGBConversion() {
            // HSL: (200, 1, 0.63)
            // RGB: (66, 192, 254)

            $this -> color = new HSLColor(200, 1, 0.63);

            $this -> assertEquals(66, $this -> color -> getRed());
            $this -> assertEquals(192, $this -> color -> getGreen());
            $this -> assertEquals(255, $this -> color -> getBlue());
        }
    }
?>