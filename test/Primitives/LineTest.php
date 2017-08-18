<?php
    use PHPUnit\Framework\TestCase;

    use Chameleon\Primitives\Line;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Vector2;

    final class LineTest extends TestCase {

        private $line;
        private $start;
        private $end;

        /**
         * @before
         */
        public function setUp() {
            $this -> start = new Vector2(0, 0);
            $this -> end = new Vector2(10, 10);
            $this -> line = new Line($this -> start, $this -> end);
        }

        public function test__construct() {
            $this -> assertObjectHasAttribute("start", $this -> line);
            $this -> assertObjectHasAttribute("end", $this -> line);
            $this -> assertObjectHasAttribute("thickness", $this -> line);
            $this -> assertObjectHasAttribute("color", $this -> line);
        }

        public function testGetStart() {
            $this -> assertEquals($this -> start, $this -> line -> getStart());
        }

        public function testSetStart() {
            $start = new Vector2(5, 5);
            $this -> line -> setStart($start);
            $this -> assertEquals($start, $this -> line -> getStart());
        }

        public function testGetEnd() {
            $this -> assertEquals($this -> end, $this -> line -> getEnd());
        }

        public function testSetEnd() {
            $end = new Vector2(15, 15);
            $this -> line -> setEnd($end);
            $this -> assertEquals($end, $this -> line -> getEnd());
        }

        public function testGetThickness() {
            $this -> assertEquals(1, $this -> line -> getThickness());
        }

        public function testSetThickness() {
            $this -> line -> setThickness(5);
            $this -> assertEquals(5, $this -> line -> getThickness());
        }

        public function testGetColor() {
            $this -> assertEquals(new RGBColor(0, 0, 0), $this -> line -> getColor());
        }

        public function testSetColor() {
            $color = new RGBColor(255, 255, 255);
            $this -> line -> setColor($color);
            $this -> assertEquals($color, $this -> line -> getColor());
        }

        public function testSetPosition() {
            $this -> line -> setPosition(new Vector2(50, 50));

            $this -> assertEquals(new Vector2(50, 50), $this -> line -> getStart());
            $this -> assertEquals(new Vector2(60, 60), $this -> line -> getEnd());
        }
    }
?>