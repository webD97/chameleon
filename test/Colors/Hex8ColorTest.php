<?php
    namespace Chameleon\Colors;
    
    use PHPUnit\Framework\TestCase;

    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class Hex8ColorTest extends TestCase {

        /**
         * @var Hex8Color
         */
        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new Hex8Color("#40BFFF55");
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("alpha", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::__toString
         */
        public function testToString() {
            $this -> assertEquals("#40BFFF55", $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::getHex
         */
        public function testGetHex() {
            $this -> assertEquals("#40BFFF55", $this -> color -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::setHex
         */
        public function testSetHex() {
            $this -> color -> setHex("#AABBCC44");
            $this -> assertEquals("#AABBCC44", $this -> color -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::getAlpha
         */
        public function testGetAlpha() {
            $this -> assertEquals(0x55, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::setAlpha
         */
        public function testSetAlpha() {
            $this -> color -> setAlpha(0x22);
            $this -> assertEquals(0x22, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::setAlpha
         */
        public function testSetAlphaTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(0x100);
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::setAlpha
         */
        public function testSetAlphaTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(-0x01);
        }

        /**
         * @covers \Chameleon\Colors\Hex8Color::fromRGBA
         */
        public function testFromRGBA() {
            $expected = new Hex8Color("#aabbcc7F");
            $actual = Hex8Color::fromRGBA(new RGBAColor(170, 187, 204, 1));

            $this -> assertEquals($expected, $actual);
        }
    }
?>