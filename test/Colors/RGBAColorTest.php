<?php
    namespace Chameleon\Colors;

    use PHPUnit\Framework\TestCase;

    use Chameleon\Colors\RGBAColor;
    use Chameleon\Exceptions\ValueOutOfBoundsException;

    final class RGBAColorTest extends TestCase {

        private $color;

        /**
         * @before
         */
        public function setUp() {
            $this -> color = new RGBAColor(255, 127, 63, 0.5);
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("alpha", $this -> color);
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::__toString
         */
        public function testToString() {
            $this -> assertEquals(sprintf("rgba(%d, %d, %d, %F)", 255, 127, 63, 0.5), $this -> color -> __toString());
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::getAlpha
         */
        public function testGetAlpha() {
            $this -> assertEquals(64, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::setAlpha
         */
        public function testSetAlpha() {
            $this -> color -> setAlpha(0);
            $this -> assertEquals(0, $this -> color -> getAlpha());
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::setAlpha
         */
        public function testSetAlphaTooHigh() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(2);
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::setAlpha
         */
        public function testSetAlphaTooLow() {
            $this -> expectException(ValueOutOfBoundsException::class);
            $this -> color -> setAlpha(-1);
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::getRGBA
         */
        public function testGetRGBA() {
            $expected = new RGBAColor(255, 127, 63, 0.5);
            $actual = $this -> color -> getRGBA();

            $this -> assertEquals($expected, $actual);
        }

        /**
         * @covers \Chameleon\Colors\RGBAColor::fromRGBA
         */
        public function testFromRGBA() {
            $expected = new RGBAColor(255, 127, 63, 0.5);
            $actual = RGBAColor::fromRGBA(new RGBAColor(255, 127, 63, 0.5));

            $this -> assertEquals($expected -> getInt(), $actual -> getInt());
        }
    }
?>