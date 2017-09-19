<?php
    namespace Chameleon;

    use PHPUnit\Framework\TestCase;

    use Chameleon\Vector2;

    final class Vector2Test extends TestCase {

        private $vector;

        /**
         * @before
         */
        public function setUp() {
            $this -> vector = new Vector2(20, 10);
        }

        /**
         * @covers \Chameleon\Vector2::__construct
         */
        public function testConstruct() {
            $this -> assertObjectHasAttribute("xCoordinate", $this -> vector);
            $this -> assertObjectHasAttribute("yCoordinate", $this -> vector);
        }

        /**
         * @covers \Chameleon\Vector2::__toString
         */
        public function testToString() {
            $this -> assertEquals("(20, 10)", $this -> vector -> __toString());
        }

        /**
         * @covers \Chameleon\Vector2::getX
         */
        public function testGetX() {
            $this -> assertEquals(20, $this -> vector -> getX());
        }

        /**
         * @covers \Chameleon\Vector2::setX
         */
        public function testSetX() {
            $this -> vector -> setX(55);
            $this -> assertEquals(55, $this -> vector -> getX());
        }

        /**
         * @covers \Chameleon\Vector2::getY
         */
        public function testGetY() {
            $this -> assertEquals(10, $this -> vector -> getY());
        }

        /**
         * @covers \Chameleon\Vector2::setY
         */
        public function testSetY() {
            $this -> vector -> setY(35);
            $this -> assertEquals(35, $this -> vector -> getY());
        }
    }
?>