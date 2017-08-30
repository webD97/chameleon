<?php
    namespace Chameleon;

    use Chameleon\Vector2;
    use Chameleon\Mask;
    use Chameleon\Patterns\IPattern;
    use Chameleon\ColorFactory;
    use Chameleon\Colors\IColor;

    class Fragment {
        private $data;
        private $mask;
        private $pattern;

        public function __construct(IPattern $pattern, Mask $mask) {
            $this -> mask = $mask;
            $this -> pattern = $pattern;

            $height = $mask -> getHeight();
            $width = $mask -> getWidth();

            $size = $width * $height;

            $this -> data = new \SplFixedArray($size);
            $patternPos = new Vector2(0, 0);
            for ($i = 0; $i < $size; $i++) {
                $patternPos -> setX($i % $height) -> setY(($i - $width) / $height);
                $this -> data -> offsetSet($i, ($mask -> getValueAt($i) == true) ? $pattern -> getColorAt($patternPos) : ColorFactory::transparent());
            }
        }

        public function getWidth() : int {
            return $this -> mask -> getWidth();
        }

        public function getHeight() : int {
            return $this -> mask -> getHeight();
        }

        public function getColorAt(int $index) : IColor {
            return $this -> data -> offsetGet($index);
        }
    }
?>