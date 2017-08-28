<?php
    namespace Chameleon\Primitives;

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

        /**
         * @covers \Chameleon\Primitives\Line::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("start", $this -> line);
            $this -> assertObjectHasAttribute("end", $this -> line);
            $this -> assertObjectHasAttribute("thickness", $this -> line);
            $this -> assertObjectHasAttribute("color", $this -> line);
        }

        /**
         * @covers \Chameleon\Primitives\Line::getStart
         */
        public function testGetStart() {
            $this -> assertEquals($this -> start, $this -> line -> getStart());
        }

        /**
         * @covers \Chameleon\Primitives\Line::setStart
         */
        public function testSetStart() {
            $start = new Vector2(5, 5);
            $this -> line -> setStart($start);
            $this -> assertEquals($start, $this -> line -> getStart());
        }

        /**
         * @covers \Chameleon\Primitives\Line::getEnd
         */
        public function testGetEnd() {
            $this -> assertEquals($this -> end, $this -> line -> getEnd());
        }

        /**
         * @covers \Chameleon\Primitives\Line::setEnd
         */
        public function testSetEnd() {
            $end = new Vector2(15, 15);
            $this -> line -> setEnd($end);
            $this -> assertEquals($end, $this -> line -> getEnd());
        }

        /**
         * @covers \Chameleon\Primitives\Line::getThickness
         */
        public function testGetThickness() {
            $this -> assertEquals(1, $this -> line -> getThickness());
        }

        /**
         * @covers \Chameleon\Primitives\Line::setThickness
         */
        public function testSetThickness() {
            $this -> line -> setThickness(5);
            $this -> assertEquals(5, $this -> line -> getThickness());
        }

        /**
         * @covers \Chameleon\Primitives\Line::getColor
         */
        public function testGetColor() {
            $this -> line -> setColor(new RGBColor(0, 0, 0));
            $this -> assertEquals(new RGBColor(0, 0, 0), $this -> line -> getColor());
        }

        /**
         * @covers \Chameleon\Primitives\Line::setColor
         */
        public function testSetColor() {
            $color = new RGBColor(255, 255, 255);
            $this -> line -> setColor($color);
            $this -> assertEquals($color, $this -> line -> getColor());
        }

        /**
         * @covers \Chameleon\Primitives\Line::setPosition
         */
        public function testSetPosition() {
            $this -> line -> setPosition(new Vector2(50, 50));

            $this -> assertEquals(new Vector2(50, 50), $this -> line -> getStart());
            $this -> assertEquals(new Vector2(60, 60), $this -> line -> getEnd());
        }
    }
?>