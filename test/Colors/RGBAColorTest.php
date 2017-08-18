<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\RGBAColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class RGBAColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new RGBAColor(255, 127, 63, 16);
        }

        /**
         * @covers RGBAColor::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("alpha", $this -> color);
        }

        /**
         * @covers RGBAColor::__toString
         */
        public function test__toString() {
            $this -> assertEquals("rgba(255, 127, 63, 16)", $this -> color -> __toString());
        }

        /**
         * @covers RGBAColor::getAlpha
         */
        public function testGetAlpha() {
            $this -> assertEquals(16, $this -> color -> getAlpha());
        }

        /**
         * @covers RGBAColor::setAlpha
         */
        public function testSetAlpha() {
            $this -> color -> setAlpha(0);
            $this -> assertEquals(0, $this -> color -> getAlpha());
        }

        /**
         * @covers RGBAColor::setAlpha
         */
        public function testSetAlphaTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(128);
        }

        /**
         * @covers RGBAColor::setAlpha
         */
        public function testSetAlphaTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(-1);
        }
    }
?>