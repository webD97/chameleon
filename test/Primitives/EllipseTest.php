<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Ellipse;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Vector2;

    final class EllipseTest extends TestCase {

        private $rect;

        /**
         * @before
         */
        public function setUp() {
            $this -> rect = new Ellipse(new Vector2(0, 0), 50, 100);
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::__construct
         */
        public function test__construct() {
            $this -> assertObjectHasAttribute("width", $this -> rect);
            $this -> assertObjectHasAttribute("height", $this -> rect);
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::getWidth
         */
        public function testGetWidth() {
            $this -> assertEquals(50, $this -> rect -> getWidth());
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::setWidth
         */
        public function testSetWidth() {
            $this -> rect -> setWidth(20);
            $this -> assertEquals(20, $this -> rect -> getWidth());
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::getHeight
         */
        public function testGetHeight() {
            $this -> assertEquals(100, $this -> rect -> getHeight());
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::setHeight
         */
        public function testSetHeight() {
            $this -> rect -> setHeight(5);
            $this -> assertEquals(5, $this -> rect -> getHeight());
        }

        /**
         * @covers \Chameleon\Primitives\Ellipse::draw
         */
        public function testDraw() {
            // TODO
            $this -> assertTrue(true);
        }
    }
?>