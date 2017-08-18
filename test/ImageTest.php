<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Image;
    use Chameleon\Vector2;
    use Chameleon\Colors\RGBColor;

    final class ImageTest extends TestCase {

        private $image;

        /**
         * @before
         */
        public function setUp() {
            $this -> image = Image::create(20, 10);
        }

        public function testCreate() {
            $this -> assertObjectHasAttribute("imageResource", $this -> image);
        }

        public function testfromFile() {
            $this -> image = Image::fromFile(__DIR__ . "/../docs/img/index/example.png");
            $this -> assertObjectHasAttribute("imageResource", $this -> image);
        }

        public function testGetWidth() {
            $this -> assertEquals(20, $this -> image -> getWidth());
        }

        public function testGetHeight() {
            $this -> assertEquals(10, $this -> image -> getHeight());
        }

        public function testGetRegisteredColor() {
            $color = new RGBColor(0, 0, 0);
            $id = $this -> image -> registerColor($color);

            $this -> assertEquals($id, $this -> image -> getRegisteredColor($color));
        }

        public function testRegisterColor() {
            $color = new RGBColor(0, 0, 0);

            $this -> assertNotEquals(-1, $this -> image -> registerColor($color));
        }
        
        public function testIsColorRegisteredYes() {
            $color = new RGBColor(0, 0, 0);
            $this -> image -> registerColor($color);

            $this -> assertTrue($this -> image -> isColorRegistered($color));
        }

        public function testIsColorRegisteredNo() {
            $color = new RGBColor(0, 0, 0);

            $this -> assertFalse($this -> image -> isColorRegistered($color));
        }

        public function testRegisterColorIfUnknownYes() {
            $color = new RGBColor(0, 0, 0);

            $this -> assertTrue($this -> image -> registerColorIfUnknown($color));
            $this -> assertTrue($this -> image -> isColorRegistered($color));
        }

        public function testRegisterColorIfUnknownNo() {
            $color = new RGBColor(0, 0, 0);
            $this -> image -> registerColor($color);

            $this -> assertFalse($this -> image -> registerColorIfUnknown($color));
            $this -> assertTrue($this -> image -> isColorRegistered($color));
        }

        public function testGetPixel() {
            // TODO: Use existing image as soon as implemented
            $pos = new Vector2(5, 5);
            $color = new RGBColor(255, 127, 63);
            $this -> image -> setPixel($pos, $color);

            $this -> assertEquals($color, $this -> image -> getPixel($pos));
        }

        public function testSetPixel() {
            $pos = new Vector2(5, 5);
            $color = new RGBColor(63, 127, 255);
            $this -> image -> setPixel($pos, $color);

            $this -> assertEquals($color, $this -> image -> getPixel($pos));
        }

        public function testSetBackgroundColor() {
            $color = new RGBColor(255, 255, 255);
            $topLeft = new Vector2(0, 0);
            $topRight = new Vector2(19, 0);
            $bottomRight = new Vector2(19, 9);
            $bottomLeft = new Vector2(0, 9);
            $this -> image -> setBackgroundColor($color);

            $this -> assertEquals($color, $this -> image -> getPixel($topLeft));
            $this -> assertEquals($color, $this -> image -> getPixel($topRight));
            $this -> assertEquals($color, $this -> image -> getPixel($bottomRight));
            $this -> assertEquals($color, $this -> image -> getPixel($bottomLeft));
        }
    }
?>