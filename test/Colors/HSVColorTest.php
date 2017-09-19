<?php
    namespace Chameleon\Colors;

    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\HSVColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class HSVColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new HSVColor(0, 1, 0.5);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("hue", $this -> color);
            $this -> assertObjectHasAttribute("saturation", $this -> color);
            $this -> assertObjectHasAttribute("value", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::__toString
         */
        public function testToString() {
            $this -> assertEquals(sprintf("hsv(%d, %F, %F)", 0, 1, 0.5), $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::getHue
         */
        public function testGetHue() {
            $this -> assertEquals(0, $this -> color -> getHue());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::getSaturation
         */
        public function testGetSaturation() {
            $this -> assertEquals(1, $this -> color -> getSaturation());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::getValue
         */
        public function testGetValue() {
            $this -> assertEquals(0.5, $this -> color -> getValue());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setHue
         */
        public function testSetHue() {
            $this -> color -> setHue(90);
            $this -> assertEquals(90, $this -> color -> getHue());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setHue
         */
        public function testSetHueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(360);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setHue
         */
        public function testSetHueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setHue(-1);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setSaturation
         */
        public function testSetSaturation() {
            $this -> color -> setSaturation(0);
            $this -> assertEquals(0, $this -> color -> getSaturation());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setSaturation
         */
        public function testSetSaturationTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(1.1);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setSaturation
         */
        public function testSetSaturationTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setSaturation(-0.1);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setValue
         */
        public function testSetValue() {
            $this -> color -> setValue(0.25);
            $this -> assertEquals(0.25, $this -> color -> getValue());
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setValue
         */
        public function testSetValueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setValue(1.1);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::setValue
         */
        public function testSetValueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setValue(-0.1);
        }

        /**
         * @covers \Chameleon\Colors\HSVColor::makeRGB
         */
        public function testRGBConversion() {
            // HSV: (200, 0.75, 1)
            // RGB: (64, 191, 255)

            $color = new HSVColor(200, 0.75, 1);
            $converted = $color -> getRGBA();

            $this -> assertEquals(64, $converted -> getRed());
            $this -> assertEquals(191, $converted -> getGreen());
            $this -> assertEquals(255, $converted -> getBlue());
        }
    }
?>