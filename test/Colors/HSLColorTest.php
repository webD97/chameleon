<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\HSLColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class HSLColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new HSLColor(0, 1, 0.5);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("hue", $this -> color);
            $this -> assertObjectHasAttribute("saturation", $this -> color);
            $this -> assertObjectHasAttribute("lightness", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::__toString
         */
        public function test__toString() {
            $this -> assertEquals("hsl(0, 1, 0.5)", $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::getHue
         */
        public function testGetHue() {
            $this -> assertEquals(0, $this -> color -> getHue());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::getSaturation
         */
        public function testGetSaturation() {
            $this -> assertEquals(1, $this -> color -> getSaturation());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::getLightness
         */
        public function testGetLightness() {
            $this -> assertEquals(0.5, $this -> color -> getLightness());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setHue
         */
        public function testSetHue() {
            $this -> color -> setHue(90);
            $this -> assertEquals(90, $this -> color -> getHue());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setHue
         */
        public function testSetHueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(360);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setHue
         */
        public function testSetHueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(-1);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setSaturation
         */
        public function testSetSaturation() {
            $this -> color -> setSaturation(0);
            $this -> assertEquals(0, $this -> color -> getSaturation());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setSaturation
         */
        public function testSetSaturationTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(1.1);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setSaturation
         */
        public function testSetSaturationTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(-0.1);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setLightness
         */
        public function testSetLightness() {
            $this -> color -> setLightness(0.25);
            $this -> assertEquals(0.25, $this -> color -> getLightness());
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setLightness
         */
        public function testsetLightnessTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setLightness(1.1);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::setLightness
         */
        public function testsetLightnessTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setLightness(-0.1);
        }

        /**
         * @covers \Chameleon\Colors\HSLColor::makeRGB
         */
        public function testRGBConversion() {
            // HSL: (200, 1, 0.63)
            // RGB: (66, 192, 254)

            $color = new HSLColor(200, 1, 0.63);
            $converted = $color -> getRGBA();

            $this -> assertEquals(66, $converted -> getRed());
            $this -> assertEquals(192, $converted -> getGreen());
            $this -> assertEquals(255, $converted -> getBlue());
        }
    }
?>