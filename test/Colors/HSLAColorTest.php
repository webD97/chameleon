<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\HSLAColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class HSLAColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new HSLAColor(200, 1, 0.63, 16);
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("alpha", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::__toString
         */
        public function test__toString() {
            $this -> assertEquals("hsla(200, 1, 0.63, 16)", $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::getAlpha
         */
        public function testGetAlpha() {
            $this -> assertEquals(16, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::setAlpha
         */
        public function testSetAlpha() {
            $this -> color -> setAlpha(0);
            $this -> assertEquals(0, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::setAlpha
         */
        public function testSetAlphaTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(128);
        }

        /**
         * @covers \Chameleon\Colors\HSLAColor::setAlpha
         */
        public function testSetAlphaTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(-1);
        }
    }
?>