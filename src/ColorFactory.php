<?php
    namespace Chameleon;

    use Chameleon\Colors\RGBAColor;

    class ColorFactory {
        public static function transparent() : RGBAColor {
            return new RGBAColor(0, 0, 0, 127);
        }
    }
?>