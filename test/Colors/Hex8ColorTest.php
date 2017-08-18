<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\Hex8Color;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class Hex8ColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new Hex8Color("#40BFFF55");
        }

        /**
         * @covers Hex8Color::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("alpha", $this -> color);
        }

        /**
         * @covers Hex8Color::__toString
         */
        public function test__toString() {
            $this -> assertEquals("#40BFFF55", $this -> color -> __toString());
        }

        /**
         * @covers Hex8Color::getHex
         */
        public function testGetHex() {
            $this -> assertEquals("#40BFFF55", $this -> color -> getHex());
        }

        /**
         * @covers Hex8Color::setHex
         */
        public function testSetHex() {
            $this -> color -> setHex("#AABBCC44");
            $this -> assertEquals("#AABBCC44", $this -> color -> getHex());
        }

        /**
         * @covers Hex8Color::setAlpha
         */
        public function testSetAlpha() {
            $this -> color -> setAlpha(0x22);
            $this -> assertEquals(0x22, $this -> color -> getAlpha());
        }

        /**
         * @covers Hex8Color::setAlpha
         */
        public function testSetAlphaTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(0x100);
        }

        /**
         * @covers Hex8Color::setAlpha
         */
        public function testSetAlphaTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(-0x01);
        }
    }
?>