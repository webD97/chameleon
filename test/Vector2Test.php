<?php
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

        public function test__construct() {
            $this -> assertObjectHasAttribute("x", $this -> vector);
            $this -> assertObjectHasAttribute("y", $this -> vector);
        }

        public function test__toString() {
            $this -> assertEquals("(20, 10)", $this -> vector -> __toString());
        }

        public function testGetX() {
            $this -> assertEquals(20, $this -> vector -> getX());
        }

        public function testSetX() {
            $this -> vector -> setX(55);
            $this -> assertEquals(55, $this -> vector -> getX());
        }

        public function testGetY() {
            $this -> assertEquals(10, $this -> vector -> getY());
        }

        public function testSetY() {
            $this -> vector -> setY(35);
            $this -> assertEquals(35, $this -> vector -> getY());
        }
    }
?>