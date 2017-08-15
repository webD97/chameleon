<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Primitive;
    use Chameleon\Primitives\Decorators\Border;
    use Chameleon\Primitives\Decorators\SimpleBackground;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Vector2;

    final class PrimitiveTest extends TestCase {

        private $primitive;

        protected function setUp() {
            $this -> primitive = $this -> getMockForAbstractClass(Primitive::class);
        }

        public function testSetGetPosition() {
            $pos = new Vector2(10, 20);

            $this -> primitive -> setPosition($pos);
            $this -> assertEquals($pos, $this -> primitive -> getPosition());
        }

        public function testSetGetBorder() {
            $border = new Border(5, new RGBColor(255, 0, 0));

            $this -> primitive -> setBorder($border);
            $this -> assertEquals($border, $this -> primitive -> getBorder());
        }

        public function testSetGetBackground() {
            $background = new SimpleBackground(new RGBColor(128, 64, 32));

            $this -> primitive -> setBackground($background);
            $this -> assertEquals($background, $this -> primitive -> getBackground());
        }
    }
?>