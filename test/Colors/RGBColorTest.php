<?php
    namespace Chameleon\Colors;

    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\RGBColor;
    use Chameleon\Colors\RGBAColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class RGBColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new RGBColor(255, 127, 63);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("red", $this -> color);
            $this -> assertObjectHasAttribute("green", $this -> color);
            $this -> assertObjectHasAttribute("blue", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::__tostring
         */
        public function testToString() {
            $this -> assertEquals("rgb(255, 127, 63)", $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::getRed
         */
        public function testGetRed() {
            $this -> assertEquals(255, $this -> color -> getRed());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::getGreen
         */
        public function testGetGreen() {
            $this -> assertEquals(127, $this -> color -> getGreen());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::getBlue
         */
        public function testGetBlue() {
            $this -> assertEquals(63, $this -> color -> getBlue());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setRed
         */
        public function testSetRed() {
            $this -> color -> setRed(0);
            $this -> assertEquals(0, $this -> color -> getRed());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setRed
         */
        public function testSetRedTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(256);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setRed
         */
        public function testSetRedTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setRed(-1);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setGreen
         */
        public function testSetGreen() {
            $this -> color -> setGreen(0);
            $this -> assertEquals(0, $this -> color -> getGreen());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setGreen
         */
        public function testSetGreenTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(256);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setGreen
         */
        public function testSetGreenTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setGreen(-1);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setBlue
         */
        public function testSetBlue() {
            $this -> color -> setBlue(0);
            $this -> assertEquals(0, $this -> color -> getBlue());
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setBlue
         */
        public function testSetBlueTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(256);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::setBlue
         */
        public function testSetBlueTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setBlue(-1);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::getRGBA
         */
        public function testGetRGBA() {
            $expected = new RGBAColor(255, 127, 63, 0);
            $actual = $this -> color -> getRGBA();

            $this -> assertEquals($expected, $actual);
        }

        /**
         * @covers \Chameleon\Colors\RGBColor::fromRGBA
         */
        public function testFromRGBA() {
            $expected = new RGBColor(10, 20, 30);
            $actual = RGBColor::fromRGBA(new RGBAColor(10, 20, 30, 40));

            $this -> assertEquals($expected, $actual);
        }
    }
?>