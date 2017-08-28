<?php
    namespace Chameleon;

    use Chameleon\Colors\Hex8Color;

    class ColorFactory {
        public static function transparent() : Hex8Color {
            return new Hex8Color("#0000007F");
        }

        public static function aliceBlue() : Hex8Color {
            return new Hex8Color("#F0F8FF00");
        }

        public static function antiqueWhite() : Hex8Color {
            return new Hex8Color("#FAEBD700");
        }

        public static function aqua() : Hex8Color {
            return new Hex8Color("#00FFFF00");
        }

        public static function aquamarine() : Hex8Color {
            return new Hex8Color("#7FFFD400");
        }

        public static function azure() : Hex8Color {
            return new Hex8Color("#F0FFFF00");
        }

        public static function beige() : Hex8Color {
            return new Hex8Color("#F5F5DC00");
        }

        public static function bisque() : Hex8Color {
            return new Hex8Color("#FFE4C400");
        }

        public static function black() : Hex8Color {
            return new Hex8Color("#00000000");
        }

        public static function blanchedAlmond() : Hex8Color {
            return new Hex8Color("#FFEBCD00");
        }

        public static function blue() : Hex8Color {
            return new Hex8Color("#0000FF00");
        }

        public static function blueViolet() : Hex8Color {
            return new Hex8Color("#8A2BE2");
        }
    }
?>