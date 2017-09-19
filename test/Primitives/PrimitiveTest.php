<?php
    namespace Chameleon\Primitives;

    use Chameleon\Colors\RGBColor;
    use PHPUnit\Framework\TestCase;

    use Chameleon\Patterns\BackgroundColor;
    use Chameleon\Vector2;

    final class PrimitiveTest extends TestCase {

        /**
         * @var Primitive
         */
        private $primitive;

        /**
         * @before
         */
        public function setUp() {
            $this -> primitive = $this -> getMockForAbstractClass(Primitive::class);
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setPosition
         */
        public function testSetPosition() {
            $pos = new Vector2(10, 20);

            $this -> assertEquals($this -> primitive, $this -> primitive -> setPosition($pos));
            $this -> assertEquals($pos, $this -> primitive -> getPosition());
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setBorderPattern
         */
        public function testSetBorderPattern() {
            $pattern = new BackgroundColor(RGBColor::blue());

            $this -> assertEquals($this -> primitive, $this -> primitive -> setBorderPattern($pattern));
            $this -> assertEquals($pattern, $this -> primitive -> getBorderPattern());
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setBorderThickness
         */
        public function testSetBorderThickness() {
            $this -> assertEquals($this -> primitive, $this -> primitive -> setBorderThickness(10));
            $this -> assertEquals(10, $this -> primitive -> getBorderThickness());
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setBackgroundPattern
         */
        public function testSetBackgroundPattern() {
            $pattern = new BackgroundColor(RGBColor::white());

            $this -> assertEquals($this -> primitive, $this -> primitive -> setBackgroundPattern($pattern));
            $this -> assertEquals($pattern, $this -> primitive -> getBackgroundPattern());
        }
    }
?>