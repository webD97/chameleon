<?php
    namespace Chameleon;

    use Chameleon\Colors\Hex8Color;

    /**
     * ColorFactory provides various helper functions for working with colors.
     * 
     * There are 141 named colors available, for a list, see https://www.w3schools.com/colors/colors_names.asp
     * The 141st color is 'transparent'
     */
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
            return new Hex8Color("#8A2BE200");
        }
        
        public static function brown() : Hex8Color {
            return new Hex8Color("#A52A2A00");
        }
        
        public static function burlyWood() : Hex8Color {
            return new Hex8Color("#DEB88700");
        }
        
        public static function cadetBlue() : Hex8Color {
            return new Hex8Color("#5F9EA000");
        }
        
        public static function chartreuse() : Hex8Color {
            return new Hex8Color("#7FFF0000");
        }
        
        public static function chocolate() : Hex8Color {
            return new Hex8Color("#D2691E00");
        }
        
        public static function coral() : Hex8Color {
            return new Hex8Color("#FF7F5000");
        }
        
        public static function cornflowerBlue() : Hex8Color {
            return new Hex8Color("#6495ED00");
        }
        
        public static function cornsilk() : Hex8Color {
            return new Hex8Color("#FFF8DC00");
        }
        
        public static function crimson() : Hex8Color {
            return new Hex8Color("#DC143C00");
        }
        
        public static function cyan() : Hex8Color {
            return new Hex8Color("#00FFFF00");
        }
        
        public static function darkBlue() : Hex8Color {
            return new Hex8Color("#00008B00");
        }
        
        public static function darkCyan() : Hex8Color {
            return new Hex8Color("#008B8B00");
        }
        
        public static function darkGoldenRod() : Hex8Color {
            return new Hex8Color("#B8860B00");
        }
        
        public static function darkGray() : Hex8Color {
            return new Hex8Color("#A9A9A900");
        }
        
        public static function darkGrey() : Hex8Color {
            return new Hex8Color("#A9A9A900");
        }
        
        public static function darkGreen() : Hex8Color {
            return new Hex8Color("#00640000");
        }
        
        public static function darkKhaki() : Hex8Color {
            return new Hex8Color("#BDB76B00");
        }
        
        public static function darkMagenta() : Hex8Color {
            return new Hex8Color("#8B008B00");
        }
        
        public static function darkOliveGreen() : Hex8Color {
            return new Hex8Color("#556B2F00");
        }
        
        public static function darkOrange() : Hex8Color {
            return new Hex8Color("#FF8C0000");
        }
        
        public static function darkOrchid() : Hex8Color {
            return new Hex8Color("#9932CC0000");
        }
        
        public static function darkRed() : Hex8Color {
            return new Hex8Color("#8B00000000");
        }
        
        public static function darkSalmon() : Hex8Color {
            return new Hex8Color("#E9967A00");
        }
        
        public static function darkSeaGreen() : Hex8Color {
            return new Hex8Color("#8FBC8F00");
        }
        
        public static function darkSlateBlue() : Hex8Color {
            return new Hex8Color("#483D8B00");
        }
        
        public static function darkSlateGray() : Hex8Color {
            return new Hex8Color("#2F4F4F00");
        }
        
        public static function darkSlateGrey() : Hex8Color {
            return new Hex8Color("#2F4F4F00");
        }
        
        public static function darkTurquoise() : Hex8Color {
            return new Hex8Color("#00CED100");
        }
        
        public static function darkViolet() : Hex8Color {
            return new Hex8Color("#9400D300");
        }
        
        public static function deepPink() : Hex8Color {
            return new Hex8Color("#FF149300");
        }
        
        public static function deepSkyBlue() : Hex8Color {
            return new Hex8Color("#00BFFF00");
        }
        
        public static function dimGray() : Hex8Color {
            return new Hex8Color("#69696900");
        }
        
        public static function dimGrey() : Hex8Color {
            return new Hex8Color("#69696900");
        }
        
        public static function dodgerBlue() : Hex8Color {
            return new Hex8Color("#1E90FF00");
        }
        
        public static function fireBrick() : Hex8Color {
            return new Hex8Color("#B2222200");
        }
        
        public static function floralWhite() : Hex8Color {
            return new Hex8Color("#FFFAF000");
        }
        
        public static function forestGreen() : Hex8Color {
            return new Hex8Color("#228B2200");
        }
        
        public static function fuchsia() : Hex8Color {
            return new Hex8Color("#FF00FF00");
        }
        
        public static function gainsboro() : Hex8Color {
            return new Hex8Color("#DCDCDC00");
        }
        
        public static function ghostWhite() : Hex8Color {
            return new Hex8Color("#F8F8FF00");
        }
        
        public static function gold() : Hex8Color {
            return new Hex8Color("#FFD70000");
        }
        
        public static function goldenRod() : Hex8Color {
            return new Hex8Color("#DAA52000");
        }
        
        public static function gray() : Hex8Color {
            return new Hex8Color("#80808000");
        }
        
        public static function grey() : Hex8Color {
            return new Hex8Color("#80808000");
        }
        
        public static function green() : Hex8Color {
            return new Hex8Color("#00800000");
        }
        
        public static function greenYellow() : Hex8Color {
            return new Hex8Color("#ADFF2F00");
        }
        
        public static function honeyDew() : Hex8Color {
            return new Hex8Color("#F0FFF000");
        }
        
        public static function hotPink() : Hex8Color {
            return new Hex8Color("#FF69B400");
        }
        
        public static function indianRed() : Hex8Color {
            return new Hex8Color("#CD5C5C00");
        }
        
        public static function indigo() : Hex8Color {
            return new Hex8Color("#4B008200");
        }
        
        public static function ivory() : Hex8Color {
            return new Hex8Color("#FFFFF000");
        }
        
        public static function khaki() : Hex8Color {
            return new Hex8Color("#F0E68C00");
        }
        
        public static function lavender() : Hex8Color {
            return new Hex8Color("#E6E6FA00");
        }
        
        public static function lavenderBlush() : Hex8Color {
            return new Hex8Color("#FFF0F500");
        }
        
        public static function lawnGreen() : Hex8Color {
            return new Hex8Color("#7CFC0000");
        }
        
        public static function lemonChiffon() : Hex8Color {
            return new Hex8Color("#FFFACD00");
        }
        
        public static function lightBlue() : Hex8Color {
            return new Hex8Color("#ADD8E600");
        }
        
        public static function lightCoral() : Hex8Color {
            return new Hex8Color("#F0808000");
        }
        
        public static function lightCyan() : Hex8Color {
            return new Hex8Color("#E0FFFF00");
        }
        
        public static function lightGoldenRodYellow() : Hex8Color {
            return new Hex8Color("#FAFAD200");
        }
        
        public static function lightGray() : Hex8Color {
            return new Hex8Color("#D3D3D300");
        }
        
        public static function lightGrey() : Hex8Color {
            return new Hex8Color("#D3D3D300");
        }
        
        public static function lightGreen() : Hex8Color {
            return new Hex8Color("#90EE9000");
        }
        
        public static function lightPink() : Hex8Color {
            return new Hex8Color("#FFB6C100");
        }
        
        public static function lightSalmon() : Hex8Color {
            return new Hex8Color("#FFA07A00");
        }
        
        public static function lightSeaGreen() : Hex8Color {
            return new Hex8Color("#20B2AA00");
        }
        
        public static function lightSkyBlue() : Hex8Color {
            return new Hex8Color("#87CEFA00");
        }
        
        public static function lightSlateGray() : Hex8Color {
            return new Hex8Color("#77889900");
        }
        
        public static function lightSlateGrey() : Hex8Color {
            return new Hex8Color("#77889900");
        }
        
        public static function lightSteelBlue() : Hex8Color {
            return new Hex8Color("#B0C4DE00");
        }
        
        public static function lightYellow() : Hex8Color {
            return new Hex8Color("#FFFFE000");
        }
        
        public static function lime() : Hex8Color {
            return new Hex8Color("#00FF0000");
        }
        
        public static function limeGreen() : Hex8Color {
            return new Hex8Color("#32CD3200");
        }
        
        public static function linen() : Hex8Color {
            return new Hex8Color("#FAF0E600");
        }
        
        public static function magenta() : Hex8Color {
            return new Hex8Color("#FF00FF00");
        }
        
        public static function maroon() : Hex8Color {
            return new Hex8Color("#80000000");
        }
        
        public static function mediumAquaMarine() : Hex8Color {
            return new Hex8Color("#66CDAA00");
        }
        
        public static function mediumBlue() : Hex8Color {
            return new Hex8Color("#0000CD00");
        }
        
        public static function mediumOrchid() : Hex8Color {
            return new Hex8Color("#BA55D300");
        }
        
        public static function mediumPurple() : Hex8Color {
            return new Hex8Color("#9370DB00");
        }
        
        public static function mediumSeaGreen() : Hex8Color {
            return new Hex8Color("#3CB37100");
        }
        
        public static function mediumSlateBlue() : Hex8Color {
            return new Hex8Color("#7B68EE00");
        }
        
        public static function mediumSpringGreen() : Hex8Color {
            return new Hex8Color("#00FA9A00");
        }
        
        public static function mediumTurquoise() : Hex8Color {
            return new Hex8Color("#48D1CC00");
        }
        
        public static function mediumVioletRed() : Hex8Color {
            return new Hex8Color("#C7158500");
        }
        
        public static function midnightBlue() : Hex8Color {
            return new Hex8Color("#19197000");
        }
        
        public static function mintCream() : Hex8Color {
            return new Hex8Color("#F5FFFA00");
        }
        
        public static function mistyRose() : Hex8Color {
            return new Hex8Color("#FFE4E100");
        }
        
        public static function moccasin() : Hex8Color {
            return new Hex8Color("#FFE4B500");
        }
        
        public static function navajoWhite() : Hex8Color {
            return new Hex8Color("#FFDEAD00");
        }
        
        public static function navy() : Hex8Color {
            return new Hex8Color("#00008000");
        }
        
        public static function oldLace() : Hex8Color {
            return new Hex8Color("#FDF5E600");
        }
        
        public static function olive() : Hex8Color {
            return new Hex8Color("#80800000");
        }
        
        public static function oliveDrab() : Hex8Color {
            return new Hex8Color("#6B8E2300");
        }
        
        public static function orange() : Hex8Color {
            return new Hex8Color("#FFA50000");
        }
        
        public static function orangeRed() : Hex8Color {
            return new Hex8Color("#FF450000");
        }
        
        public static function orchid() : Hex8Color {
            return new Hex8Color("#DA70D600");
        }
        
        public static function paleGoldenRod() : Hex8Color {
            return new Hex8Color("#EEE8AA00");
        }
        
        public static function paleGreen() : Hex8Color {
            return new Hex8Color("#98FB9800");
        }
        
        public static function paleTurquoise() : Hex8Color {
            return new Hex8Color("#AFEEEE00");
        }
        
        public static function paleVioletRed() : Hex8Color {
            return new Hex8Color("#DB709300");
        }
        
        public static function papayaWhip() : Hex8Color {
            return new Hex8Color("#FFEFD500");
        }
        
        public static function peachPuff() : Hex8Color {
            return new Hex8Color("#FFDAB900");
        }
        
        public static function peru() : Hex8Color {
            return new Hex8Color("#CD853F00");
        }
        
        public static function pink() : Hex8Color {
            return new Hex8Color("#FFC0CB00");
        }
        
        public static function plum() : Hex8Color {
            return new Hex8Color("#DDA0DD00");
        }
        
        public static function powderBlue() : Hex8Color {
            return new Hex8Color("#B0E0E600");
        }
        
        public static function purple() : Hex8Color {
            return new Hex8Color("#80008000");
        }
        
        public static function rebeccaPurple() : Hex8Color {
            return new Hex8Color("#66339900");
        }
        
        public static function red() : Hex8Color {
            return new Hex8Color("#FF000000");
        }
        
        public static function rosyBrown() : Hex8Color {
            return new Hex8Color("#BC8F8F00");
        }
        
        public static function royalBlue() : Hex8Color {
            return new Hex8Color("#4169E100");
        }
        
        public static function saddleBrown() : Hex8Color {
            return new Hex8Color("#8B451300");
        }
        
        public static function salmon() : Hex8Color {
            return new Hex8Color("#FA807200");
        }
        
        public static function sandyBrown() : Hex8Color {
            return new Hex8Color("#F4A46000");
        }
        
        public static function seaGreen() : Hex8Color {
            return new Hex8Color("#2E8B5700");
        }
        
        public static function seaShell() : Hex8Color {
            return new Hex8Color("#FFF5EE00");
        }
        
        public static function sienna() : Hex8Color {
            return new Hex8Color("#A0522D00");
        }
        
        public static function silver() : Hex8Color {
            return new Hex8Color("#C0C0C000");
        }
        
        public static function skyBlue() : Hex8Color {
            return new Hex8Color("#87CEEB00");
        }
        
        public static function slateBlue() : Hex8Color {
            return new Hex8Color("#6A5ACD00");
        }
        
        public static function slateGray() : Hex8Color {
            return new Hex8Color("#70809000");
        }
        
        public static function slateGrey() : Hex8Color {
            return new Hex8Color("#70809000");
        }
        
        public static function snow() : Hex8Color {
            return new Hex8Color("#FFFAFA00");
        }
        
        public static function springGreen() : Hex8Color {
            return new Hex8Color("#00FF7F00");
        }
        
        public static function steelBlue() : Hex8Color {
            return new Hex8Color("#4682B400");
        }
        
        public static function tan() : Hex8Color {
            return new Hex8Color("#D2B48C00");
        }
        
        public static function teal() : Hex8Color {
            return new Hex8Color("#00808000");
        }
        
        public static function thistle() : Hex8Color {
            return new Hex8Color("#D8BFD800");
        }
        
        public static function tomato() : Hex8Color {
            return new Hex8Color("#FF634700");
        }
        
        public static function turquoise() : Hex8Color {
            return new Hex8Color("#40E0D000");
        }
        
        public static function violet() : Hex8Color {
            return new Hex8Color("#EE82EE00");
        }
        
        public static function wheat() : Hex8Color {
            return new Hex8Color("#F5DEB300");
        }
        
        public static function white() : Hex8Color {
            return new Hex8Color("#FFFFFF00");
        }
        
        public static function whiteSmoke() : Hex8Color {
            return new Hex8Color("#F5F5F500");
        }
        
        public static function yellow() : Hex8Color {
            return new Hex8Color("#FFFF0000");
        }
        
        public static function yellowGreen() : Hex8Color {
            return new Hex8Color("#9ACD3200");
        }
    }
?>