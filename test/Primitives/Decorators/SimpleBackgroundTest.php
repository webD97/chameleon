<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Decorators\SimpleBackground;
    use Chameleon\Colors\RGBColor;

    final class SimpleBackgroundTest extends TestCase {

        private $color;
        private $background;

        protected function setUp() {
            $this -> color = new RGBColor(128, 64, 32);
            $this -> background = new SimpleBackground($this -> color);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("color", $this -> background);
        }

        public function testGetColor() {
            $this -> assertEquals($this -> color, $this -> background -> getColor());
        }

        public function testSetColor() {
            $color = new RGBColor(255, 127, 64);
            $this -> background-> setColor($color);
            $this -> assertEquals($color, $this -> background -> getColor());
        }
    }
?>