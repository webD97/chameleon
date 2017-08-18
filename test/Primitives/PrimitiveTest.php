<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Primitive;
    use Chameleon\Primitives\Rectangle;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Vector2;

    final class PrimitiveTest extends TestCase {

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
         * @covers \Chameleon\Primitives\Primitive::setBorderColor
         */
        public function testSetBorderColor() {
            $color = new RGBColor(255, 0, 0);

            $this -> assertEquals($this -> primitive, $this -> primitive -> setBorderColor($color));
            $this -> assertEquals($color, $this -> primitive -> getBorderColor());
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setBorderThickness
         */
        public function testSetBorderThickness() {
            $this -> assertEquals($this -> primitive, $this -> primitive -> setBorderThickness(10));
            $this -> assertEquals(10, $this -> primitive -> getBorderThickness());
        }

        /**
         * @covers \Chameleon\Primitives\Primitive::setBackgroundColor
         */
        public function testSetBackgroundColor() {
            $color = new RGBColor(255, 255, 255);

            $this -> assertEquals($this -> primitive, $this -> primitive -> setBackgroundColor($color));
            $this -> assertEquals($color, $this -> primitive -> getBackgroundColor());
        }
    }
?>