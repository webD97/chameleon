<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Decorators\Border;
    use Chameleon\Colors\RGBColor;

    final class BorderTest extends TestCase {

        private $color;
        private $border;

        protected function setUp() {
            $this -> color = new RGBColor(128, 64, 32);
            $this -> border = new Border(5, $this -> color);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("thickness", $this -> border);
            $this -> assertObjectHasAttribute("color", $this -> border);
        }

        public function testGetThickness() {
            $this -> assertEquals(5, $this -> border -> getThickness());
        }

        public function testSetThickness() {
            $this -> border -> setThickness(10);
            $this -> assertEquals(10, $this -> border -> getThickness());
        }

        public function testGetColor() {
            $this -> assertEquals($this -> color, $this -> border -> getColor());
        }

        public function testSetColor() {
            $color = new RGBColor(255, 127, 64);
            $this -> border-> setColor($color);
            $this -> assertEquals($color, $this -> border -> getColor());
        }
    }
?>