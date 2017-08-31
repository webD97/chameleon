<?php
    namespace Chameleon\Primitives;

    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Rectangle;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Patterns\BackgroundColor;
    use Chameleon\Vector2;
    use Chameleon\Image;
    use Chameleon\ColorFactory;

    final class RectangleTest extends TestCase {

        private $rect;

        /**
         * @before
         */
        public function setUp() {
            $this -> rect = new Rectangle(new Vector2(0, 0), 50, 100);
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("width", $this -> rect);
            $this -> assertObjectHasAttribute("height", $this -> rect);
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::getWidth
         */
        public function testGetWidth() {
            $this -> assertEquals(50, $this -> rect -> getWidth());
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::setWidth
         */
        public function testSetWidth() {
            $this -> rect -> setWidth(20);
            $this -> assertEquals(20, $this -> rect -> getWidth());
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::getHeight
         */
        public function testGetHeight() {
            $this -> assertEquals(100, $this -> rect -> getHeight());
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::setHeight
         */
        public function testSetHeight() {
            $this -> rect -> setHeight(5);
            $this -> assertEquals(5, $this -> rect -> getHeight());
        }

        /**
         * @covers Chameleon\Primitives\Rectangle::draw
         */
        public function testDrawWithBackgroundColor() {
            $image = Image::create(4, 4);
            $image -> setBackgroundPattern(new BackgroundColor(ColorFactory::black()));

            $rectangle = new Rectangle(new Vector2(1, 1), 2, 2);
            $rectangle -> setBackgroundPattern(new BackgroundColor(ColorFactory::white()));

            $image -> draw($rectangle);

            $black = new RGBColor(0, 0, 0);
            $white = new RGBColor(255, 255, 255);
            $this -> assertEquals($black, $image -> getPixel(0, 0));
            $this -> assertEquals($black, $image -> getPixel(3, 0));
            $this -> assertEquals($black, $image -> getPixel(0, 3));
            $this -> assertEquals($black, $image -> getPixel(3, 3));

            $this -> assertEquals($white, $image -> getPixel(1, 1));
            $this -> assertEquals($white, $image -> getPixel(2, 1));
            $this -> assertEquals($white, $image -> getPixel(1, 2));
            $this -> assertEquals($white, $image -> getPixel(2, 2));
        }
    }
?>