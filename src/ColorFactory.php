<?php
    namespace Chameleon;

    use Chameleon\Colors\Hex8Color;

    /**
     * Class ColorFactory provides various helper functions for working with colors.
     *
     * There are 141 named colors available, the 141st color is 'transparent'.
     *
     * @api
     * @see https://www.w3schools.com/colors/colors_names.asp
     * @package Chameleon
     */
    class ColorFactory {
        /**
         * transparent
         * @return Hex8Color transparent
         */
        public static function transparent() : Hex8Color {
            return new Hex8Color("#0000007F");
        }

        /**
         * aliceBlue
         * @return Hex8Color aliceBlue
         */
        public static function aliceBlue() : Hex8Color {
            return new Hex8Color("#F0F8FF00");
        }

        /**
         * antiqueWhite
         * @return Hex8Color antiqueWhite
         */
        public static function antiqueWhite() : Hex8Color {
            return new Hex8Color("#FAEBD700");
        }

        /**
         * aqua
         * @return Hex8Color aqua
         */
        public static function aqua() : Hex8Color {
            return new Hex8Color("#00FFFF00");
        }

        /**
         * aquamarine
         * @return Hex8Color aquamarine
         */
        public static function aquamarine() : Hex8Color {
            return new Hex8Color("#7FFFD400");
        }

        /**
         * azure
         * @return Hex8Color azure
         */
        public static function azure() : Hex8Color {
            return new Hex8Color("#F0FFFF00");
        }

        /**
         * beige
         * @return Hex8Color beige
         */
        public static function beige() : Hex8Color {
            return new Hex8Color("#F5F5DC00");
        }

        /**
         * bisque
         * @return Hex8Color bisque
         */
        public static function bisque() : Hex8Color {
            return new Hex8Color("#FFE4C400");
        }

        /**
         * black
         * @return Hex8Color black
         */
        public static function black() : Hex8Color {
            return new Hex8Color("#00000000");
        }

        /**
         * blanchedAlmond
         * @return Hex8Color blanchedAlmond
         */
        public static function blanchedAlmond() : Hex8Color {
            return new Hex8Color("#FFEBCD00");
        }

        /**
         * blue
         * @return Hex8Color blue
         */
        public static function blue() : Hex8Color {
            return new Hex8Color("#0000FF00");
        }

        /**
         * blueViolet
         * @return Hex8Color blueViolet
         */
        public static function blueViolet() : Hex8Color {
            return new Hex8Color("#8A2BE200");
        }

        /**
         * brown
         * @return Hex8Color brown
         */
        public static function brown() : Hex8Color {
            return new Hex8Color("#A52A2A00");
        }

        /**
         * burlyWood
         * @return Hex8Color burlyWood
         */
        public static function burlyWood() : Hex8Color {
            return new Hex8Color("#DEB88700");
        }

        /**
         * cadetBlue
         * @return Hex8Color cadetBlue
         */
        public static function cadetBlue() : Hex8Color {
            return new Hex8Color("#5F9EA000");
        }

        /**
         * chartreuse
         * @return Hex8Color chartreuse
         */
        public static function chartreuse() : Hex8Color {
            return new Hex8Color("#7FFF0000");
        }

        /**
         * chocolate
         * @return Hex8Color chocolate
         */
        public static function chocolate() : Hex8Color {
            return new Hex8Color("#D2691E00");
        }

        /**
         * coral
         * @return Hex8Color coral
         */
        public static function coral() : Hex8Color {
            return new Hex8Color("#FF7F5000");
        }

        /**
         * cornflowerBlue
         * @return Hex8Color cornflowerBlue
         */
        public static function cornflowerBlue() : Hex8Color {
            return new Hex8Color("#6495ED00");
        }

        /**
         * cornsilk
         * @return Hex8Color cornsilk
         */
        public static function cornsilk() : Hex8Color {
            return new Hex8Color("#FFF8DC00");
        }

        /**
         * crimson
         * @return Hex8Color crimson
         */
        public static function crimson() : Hex8Color {
            return new Hex8Color("#DC143C00");
        }

        /**
         * cyan
         * @return Hex8Color cyan
         */
        public static function cyan() : Hex8Color {
            return new Hex8Color("#00FFFF00");
        }

        /**
         * darkBlue
         * @return Hex8Color darkBlue
         */
        public static function darkBlue() : Hex8Color {
            return new Hex8Color("#00008B00");
        }

        /**
         * darkCyan
         * @return Hex8Color darkCyan
         */
        public static function darkCyan() : Hex8Color {
            return new Hex8Color("#008B8B00");
        }

        /**
         * darkGoldenRod
         * @return Hex8Color darkGoldenRod
         */
        public static function darkGoldenRod() : Hex8Color {
            return new Hex8Color("#B8860B00");
        }

        /**
         * darkGray
         * @return Hex8Color darkGray
         */
        public static function darkGray() : Hex8Color {
            return new Hex8Color("#A9A9A900");
        }

        /**
         * darkGrey
         * @return Hex8Color darkGrey
         */
        public static function darkGrey() : Hex8Color {
            return new Hex8Color("#A9A9A900");
        }

        /**
         * darkGreen
         * @return Hex8Color darkGreen
         */
        public static function darkGreen() : Hex8Color {
            return new Hex8Color("#00640000");
        }

        /**
         * darkKhaki
         * @return Hex8Color darkKhaki
         */
        public static function darkKhaki() : Hex8Color {
            return new Hex8Color("#BDB76B00");
        }

        /**
         * darkMagenta
         * @return Hex8Color darkMagenta
         */
        public static function darkMagenta() : Hex8Color {
            return new Hex8Color("#8B008B00");
        }

        /**
         * darkOliveGreen
         * @return Hex8Color darkOliveGreen
         */
        public static function darkOliveGreen() : Hex8Color {
            return new Hex8Color("#556B2F00");
        }

        /**
         * darkOrange
         * @return Hex8Color darkOrange
         */
        public static function darkOrange() : Hex8Color {
            return new Hex8Color("#FF8C0000");
        }

        /**
         * darkOrchid
         * @return Hex8Color darkOrchid
         */
        public static function darkOrchid() : Hex8Color {
            return new Hex8Color("#9932CC00");
        }

        /**
         * darkRed
         * @return Hex8Color darkRed
         */
        public static function darkRed() : Hex8Color {
            return new Hex8Color("#8B000000");
        }

        /**
         * darkSalmon
         * @return Hex8Color darkSalmon
         */
        public static function darkSalmon() : Hex8Color {
            return new Hex8Color("#E9967A00");
        }

        /**
         * darkSeaGreen
         * @return Hex8Color darkSeaGreen
         */
        public static function darkSeaGreen() : Hex8Color {
            return new Hex8Color("#8FBC8F00");
        }

        /**
         * darkSlateBlue
         * @return Hex8Color darkSlateBlue
         */
        public static function darkSlateBlue() : Hex8Color {
            return new Hex8Color("#483D8B00");
        }

        /**
         * darkSlateGray
         * @return Hex8Color darkSlateGray
         */
        public static function darkSlateGray() : Hex8Color {
            return new Hex8Color("#2F4F4F00");
        }

        /**
         * darkSlateGrey
         * @return Hex8Color darkSlateGrey
         */
        public static function darkSlateGrey() : Hex8Color {
            return new Hex8Color("#2F4F4F00");
        }

        /**
         * darkTurquoise
         * @return Hex8Color darkTurquoise
         */
        public static function darkTurquoise() : Hex8Color {
            return new Hex8Color("#00CED100");
        }

        /**
         * darkViolet
         * @return Hex8Color darkViolet
         */
        public static function darkViolet() : Hex8Color {
            return new Hex8Color("#9400D300");
        }

        /**
         * deepPink
         * @return Hex8Color deepPink
         */
        public static function deepPink() : Hex8Color {
            return new Hex8Color("#FF149300");
        }

        /**
         * deepSkyBlue
         * @return Hex8Color deepSkyBlue
         */
        public static function deepSkyBlue() : Hex8Color {
            return new Hex8Color("#00BFFF00");
        }

        /**
         * dimGray
         * @return Hex8Color dimGray
         */
        public static function dimGray() : Hex8Color {
            return new Hex8Color("#69696900");
        }

        /**
         * dimGrey
         * @return Hex8Color dimGrey
         */
        public static function dimGrey() : Hex8Color {
            return new Hex8Color("#69696900");
        }

        /**
         * dodgerBlue
         * @return Hex8Color dodgerBlue
         */
        public static function dodgerBlue() : Hex8Color {
            return new Hex8Color("#1E90FF00");
        }

        /**
         * fireBrick
         * @return Hex8Color fireBrick
         */
        public static function fireBrick() : Hex8Color {
            return new Hex8Color("#B2222200");
        }

        /**
         * floralWhite
         * @return Hex8Color floralWhite
         */
        public static function floralWhite() : Hex8Color {
            return new Hex8Color("#FFFAF000");
        }

        /**
         * forestGreen
         * @return Hex8Color forestGreen
         */
        public static function forestGreen() : Hex8Color {
            return new Hex8Color("#228B2200");
        }

        /**
         * fuchsia
         * @return Hex8Color fuchsia
         */
        public static function fuchsia() : Hex8Color {
            return new Hex8Color("#FF00FF00");
        }

        /**
         * gainsboro
         * @return Hex8Color gainsboro
         */
        public static function gainsboro() : Hex8Color {
            return new Hex8Color("#DCDCDC00");
        }

        /**
         * ghostWhite
         * @return Hex8Color ghostWhite
         */
        public static function ghostWhite() : Hex8Color {
            return new Hex8Color("#F8F8FF00");
        }

        /**
         * gold
         * @return Hex8Color gold
         */
        public static function gold() : Hex8Color {
            return new Hex8Color("#FFD70000");
        }

        /**
         * goldenRod
         * @return Hex8Color goldenRod
         */
        public static function goldenRod() : Hex8Color {
            return new Hex8Color("#DAA52000");
        }

        /**
         * gray
         * @return Hex8Color gray
         */
        public static function gray() : Hex8Color {
            return new Hex8Color("#80808000");
        }

        /**
         * grey
         * @return Hex8Color grey
         */
        public static function grey() : Hex8Color {
            return new Hex8Color("#80808000");
        }

        /**
         * green
         * @return Hex8Color green
         */
        public static function green() : Hex8Color {
            return new Hex8Color("#00800000");
        }

        /**
         * greenYellow
         * @return Hex8Color greenYellow
         */
        public static function greenYellow() : Hex8Color {
            return new Hex8Color("#ADFF2F00");
        }

        /**
         * honeyDew
         * @return Hex8Color honeyDew
         */
        public static function honeyDew() : Hex8Color {
            return new Hex8Color("#F0FFF000");
        }

        /**
         * hotPink
         * @return Hex8Color hotPink
         */
        public static function hotPink() : Hex8Color {
            return new Hex8Color("#FF69B400");
        }

        /**
         * indianRed
         * @return Hex8Color indianRed
         */
        public static function indianRed() : Hex8Color {
            return new Hex8Color("#CD5C5C00");
        }

        /**
         * indigo
         * @return Hex8Color indigo
         */
        public static function indigo() : Hex8Color {
            return new Hex8Color("#4B008200");
        }

        /**
         * ivory
         * @return Hex8Color ivory
         */
        public static function ivory() : Hex8Color {
            return new Hex8Color("#FFFFF000");
        }

        /**
         * khaki
         * @return Hex8Color khaki
         */
        public static function khaki() : Hex8Color {
            return new Hex8Color("#F0E68C00");
        }

        /**
         * lavender
         * @return Hex8Color lavender
         */
        public static function lavender() : Hex8Color {
            return new Hex8Color("#E6E6FA00");
        }

        /**
         * lavenderBlush
         * @return Hex8Color lavenderBlush
         */
        public static function lavenderBlush() : Hex8Color {
            return new Hex8Color("#FFF0F500");
        }

        /**
         * lawnGreen
         * @return Hex8Color lawnGreen
         */
        public static function lawnGreen() : Hex8Color {
            return new Hex8Color("#7CFC0000");
        }

        /**
         * lemonChiffon
         * @return Hex8Color lemonChiffon
         */
        public static function lemonChiffon() : Hex8Color {
            return new Hex8Color("#FFFACD00");
        }

        /**
         * lightBlue
         * @return Hex8Color lightBlue
         */
        public static function lightBlue() : Hex8Color {
            return new Hex8Color("#ADD8E600");
        }

        /**
         * lightCoral
         * @return Hex8Color lightCoral
         */
        public static function lightCoral() : Hex8Color {
            return new Hex8Color("#F0808000");
        }

        /**
         * lightCyan
         * @return Hex8Color lightCyan
         */
        public static function lightCyan() : Hex8Color {
            return new Hex8Color("#E0FFFF00");
        }

        /**
         * lightGoldenRodYellow
         * @return Hex8Color lightGoldenRodYellow
         */
        public static function lightGoldenRodYellow() : Hex8Color {
            return new Hex8Color("#FAFAD200");
        }

        /**
         * lightGray
         * @return Hex8Color lightGray
         */
        public static function lightGray() : Hex8Color {
            return new Hex8Color("#D3D3D300");
        }

        /**
         * lightGrey
         * @return Hex8Color lightGrey
         */
        public static function lightGrey() : Hex8Color {
            return new Hex8Color("#D3D3D300");
        }

        /**
         * lightGreen
         * @return Hex8Color lightGreen
         */
        public static function lightGreen() : Hex8Color {
            return new Hex8Color("#90EE9000");
        }

        /**
         * lightPink
         * @return Hex8Color lightPink
         */
        public static function lightPink() : Hex8Color {
            return new Hex8Color("#FFB6C100");
        }

        /**
         * lightSalmon
         * @return Hex8Color lightSalmon
         */
        public static function lightSalmon() : Hex8Color {
            return new Hex8Color("#FFA07A00");
        }

        /**
         * lightSeaGreen
         * @return Hex8Color lightSeaGreen
         */
        public static function lightSeaGreen() : Hex8Color {
            return new Hex8Color("#20B2AA00");
        }

        /**
         * lightSkyBlue
         * @return Hex8Color lightSkyBlue
         */
        public static function lightSkyBlue() : Hex8Color {
            return new Hex8Color("#87CEFA00");
        }

        /**
         * lightSlateGray
         * @return Hex8Color lightSlateGray
         */
        public static function lightSlateGray() : Hex8Color {
            return new Hex8Color("#77889900");
        }

        /**
         * lightSlateGrey
         * @return Hex8Color lightSlateGrey
         */
        public static function lightSlateGrey() : Hex8Color {
            return new Hex8Color("#77889900");
        }

        /**
         * lightSteelBlue
         * @return Hex8Color lightSteelBlue
         */
        public static function lightSteelBlue() : Hex8Color {
            return new Hex8Color("#B0C4DE00");
        }

        /**
         * lightYellow
         * @return Hex8Color lightYellow
         */
        public static function lightYellow() : Hex8Color {
            return new Hex8Color("#FFFFE000");
        }

        /**
         * lime
         * @return Hex8Color lime
         */
        public static function lime() : Hex8Color {
            return new Hex8Color("#00FF0000");
        }

        /**
         * limeGreen
         * @return Hex8Color limeGreen
         */
        public static function limeGreen() : Hex8Color {
            return new Hex8Color("#32CD3200");
        }

        /**
         * linen
         * @return Hex8Color linen
         */
        public static function linen() : Hex8Color {
            return new Hex8Color("#FAF0E600");
        }

        /**
         * magenta
         * @return Hex8Color magenta
         */
        public static function magenta() : Hex8Color {
            return new Hex8Color("#FF00FF00");
        }

        /**
         * maroon
         * @return Hex8Color maroon
         */
        public static function maroon() : Hex8Color {
            return new Hex8Color("#80000000");
        }

        /**
         * mediumAquaMarine
         * @return Hex8Color mediumAquaMarine
         */
        public static function mediumAquaMarine() : Hex8Color {
            return new Hex8Color("#66CDAA00");
        }

        /**
         * mediumBlue
         * @return Hex8Color mediumBlue
         */
        public static function mediumBlue() : Hex8Color {
            return new Hex8Color("#0000CD00");
        }

        /**
         * mediumOrchid
         * @return Hex8Color mediumOrchid
         */
        public static function mediumOrchid() : Hex8Color {
            return new Hex8Color("#BA55D300");
        }

        /**
         * mediumPurple
         * @return Hex8Color mediumPurple
         */
        public static function mediumPurple() : Hex8Color {
            return new Hex8Color("#9370DB00");
        }

        /**
         * mediumSeaGreen
         * @return Hex8Color mediumSeaGreen
         */
        public static function mediumSeaGreen() : Hex8Color {
            return new Hex8Color("#3CB37100");
        }

        /**
         * mediumSlateBlue
         * @return Hex8Color mediumSlateBlue
         */
        public static function mediumSlateBlue() : Hex8Color {
            return new Hex8Color("#7B68EE00");
        }

        /**
         * mediumSpringGreen
         * @return Hex8Color mediumSpringGreen
         */
        public static function mediumSpringGreen() : Hex8Color {
            return new Hex8Color("#00FA9A00");
        }

        /**
         * mediumTurquoise
         * @return Hex8Color mediumTurquoise
         */
        public static function mediumTurquoise() : Hex8Color {
            return new Hex8Color("#48D1CC00");
        }

        /**
         * mediumVioletRed
         * @return Hex8Color mediumVioletRed
         */
        public static function mediumVioletRed() : Hex8Color {
            return new Hex8Color("#C7158500");
        }

        /**
         * midnightBlue
         * @return Hex8Color midnightBlue
         */
        public static function midnightBlue() : Hex8Color {
            return new Hex8Color("#19197000");
        }

        /**
         * mintCream
         * @return Hex8Color mintCream
         */
        public static function mintCream() : Hex8Color {
            return new Hex8Color("#F5FFFA00");
        }

        /**
         * mistyRose
         * @return Hex8Color mistyRose
         */
        public static function mistyRose() : Hex8Color {
            return new Hex8Color("#FFE4E100");
        }

        /**
         * moccasin
         * @return Hex8Color moccasin
         */
        public static function moccasin() : Hex8Color {
            return new Hex8Color("#FFE4B500");
        }

        /**
         * navajoWhite
         * @return Hex8Color navajoWhite
         */
        public static function navajoWhite() : Hex8Color {
            return new Hex8Color("#FFDEAD00");
        }

        /**
         * navy
         * @return Hex8Color navy
         */
        public static function navy() : Hex8Color {
            return new Hex8Color("#00008000");
        }

        /**
         * oldLace
         * @return Hex8Color oldLace
         */
        public static function oldLace() : Hex8Color {
            return new Hex8Color("#FDF5E600");
        }

        /**
         * olive
         * @return Hex8Color olive
         */
        public static function olive() : Hex8Color {
            return new Hex8Color("#80800000");
        }

        /**
         * oliveDrab
         * @return Hex8Color oliveDrab
         */
        public static function oliveDrab() : Hex8Color {
            return new Hex8Color("#6B8E2300");
        }

        /**
         * orange
         * @return Hex8Color orange
         */
        public static function orange() : Hex8Color {
            return new Hex8Color("#FFA50000");
        }

        /**
         * orangeRed
         * @return Hex8Color orangeRed
         */
        public static function orangeRed() : Hex8Color {
            return new Hex8Color("#FF450000");
        }

        /**
         * orchid
         * @return Hex8Color orchid
         */
        public static function orchid() : Hex8Color {
            return new Hex8Color("#DA70D600");
        }

        /**
         * paleGoldenRod
         * @return Hex8Color paleGoldenRod
         */
        public static function paleGoldenRod() : Hex8Color {
            return new Hex8Color("#EEE8AA00");
        }

        /**
         * paleGreen
         * @return Hex8Color paleGreen
         */
        public static function paleGreen() : Hex8Color {
            return new Hex8Color("#98FB9800");
        }

        /**
         * paleTurquoise
         * @return Hex8Color paleTurquoise
         */
        public static function paleTurquoise() : Hex8Color {
            return new Hex8Color("#AFEEEE00");
        }

        /**
         * paleVioletRed
         * @return Hex8Color paleVioletRed
         */
        public static function paleVioletRed() : Hex8Color {
            return new Hex8Color("#DB709300");
        }

        /**
         * papayaWhip
         * @return Hex8Color papayaWhip
         */
        public static function papayaWhip() : Hex8Color {
            return new Hex8Color("#FFEFD500");
        }

        /**
         * peachPuff
         * @return Hex8Color peachPuff
         */
        public static function peachPuff() : Hex8Color {
            return new Hex8Color("#FFDAB900");
        }

        /**
         * peru
         * @return Hex8Color peru
         */
        public static function peru() : Hex8Color {
            return new Hex8Color("#CD853F00");
        }

        /**
         * pink
         * @return Hex8Color pink
         */
        public static function pink() : Hex8Color {
            return new Hex8Color("#FFC0CB00");
        }

        /**
         * plum
         * @return Hex8Color plum
         */
        public static function plum() : Hex8Color {
            return new Hex8Color("#DDA0DD00");
        }

        /**
         * powderBlue
         * @return Hex8Color powderBlue
         */
        public static function powderBlue() : Hex8Color {
            return new Hex8Color("#B0E0E600");
        }

        /**
         * purple
         * @return Hex8Color purple
         */
        public static function purple() : Hex8Color {
            return new Hex8Color("#80008000");
        }

        /**
         * rebeccaPurple
         * @return Hex8Color rebeccaPurple
         */
        public static function rebeccaPurple() : Hex8Color {
            return new Hex8Color("#66339900");
        }

        /**
         * red
         * @return Hex8Color red
         */
        public static function red() : Hex8Color {
            return new Hex8Color("#FF000000");
        }

        /**
         * rosyBrown
         * @return Hex8Color rosyBrown
         */
        public static function rosyBrown() : Hex8Color {
            return new Hex8Color("#BC8F8F00");
        }

        /**
         * royalBlue
         * @return Hex8Color royalBlue
         */
        public static function royalBlue() : Hex8Color {
            return new Hex8Color("#4169E100");
        }

        /**
         * saddleBrown
         * @return Hex8Color saddleBrown
         */
        public static function saddleBrown() : Hex8Color {
            return new Hex8Color("#8B451300");
        }

        /**
         * salmon
         * @return Hex8Color salmon
         */
        public static function salmon() : Hex8Color {
            return new Hex8Color("#FA807200");
        }

        /**
         * sandyBrown
         * @return Hex8Color sandyBrown
         */
        public static function sandyBrown() : Hex8Color {
            return new Hex8Color("#F4A46000");
        }

        /**
         * seaGreen
         * @return Hex8Color seaGreen
         */
        public static function seaGreen() : Hex8Color {
            return new Hex8Color("#2E8B5700");
        }

        /**
         * seaShell
         * @return Hex8Color seaShell
         */
        public static function seaShell() : Hex8Color {
            return new Hex8Color("#FFF5EE00");
        }

        /**
         * sienna
         * @return Hex8Color sienna
         */
        public static function sienna() : Hex8Color {
            return new Hex8Color("#A0522D00");
        }

        /**
         * silver
         * @return Hex8Color silver
         */
        public static function silver() : Hex8Color {
            return new Hex8Color("#C0C0C000");
        }

        /**
         * skyBlue
         * @return Hex8Color skyBlue
         */
        public static function skyBlue() : Hex8Color {
            return new Hex8Color("#87CEEB00");
        }

        /**
         * slateBlue
         * @return Hex8Color slateBlue
         */
        public static function slateBlue() : Hex8Color {
            return new Hex8Color("#6A5ACD00");
        }

        /**
         * slateGray
         * @return Hex8Color slateGray
         */
        public static function slateGray() : Hex8Color {
            return new Hex8Color("#70809000");
        }

        /**
         * slateGrey
         * @return Hex8Color slateGrey
         */
        public static function slateGrey() : Hex8Color {
            return new Hex8Color("#70809000");
        }

        /**
         * snow
         * @return Hex8Color snow
         */
        public static function snow() : Hex8Color {
            return new Hex8Color("#FFFAFA00");
        }

        /**
         * springGreen
         * @return Hex8Color springGreen
         */
        public static function springGreen() : Hex8Color {
            return new Hex8Color("#00FF7F00");
        }

        /**
         * steelBlue
         * @return Hex8Color steelBlue
         */
        public static function steelBlue() : Hex8Color {
            return new Hex8Color("#4682B400");
        }

        /**
         * tan
         * @return Hex8Color tan
         */
        public static function tan() : Hex8Color {
            return new Hex8Color("#D2B48C00");
        }

        /**
         * teal
         * @return Hex8Color teal
         */
        public static function teal() : Hex8Color {
            return new Hex8Color("#00808000");
        }

        /**
         * thistle
         * @return Hex8Color thistle
         */
        public static function thistle() : Hex8Color {
            return new Hex8Color("#D8BFD800");
        }

        /**
         * tomato
         * @return Hex8Color tomato
         */
        public static function tomato() : Hex8Color {
            return new Hex8Color("#FF634700");
        }

        /**
         * turquoise
         * @return Hex8Color turquoise
         */
        public static function turquoise() : Hex8Color {
            return new Hex8Color("#40E0D000");
        }

        /**
         * violet
         * @return Hex8Color violet
         */
        public static function violet() : Hex8Color {
            return new Hex8Color("#EE82EE00");
        }

        /**
         * wheat
         * @return Hex8Color wheat
         */
        public static function wheat() : Hex8Color {
            return new Hex8Color("#F5DEB300");
        }

        /**
         * white
         * @return Hex8Color white
         */
        public static function white() : Hex8Color {
            return new Hex8Color("#FFFFFF00");
        }

        /**
         * whiteSmoke
         * @return Hex8Color whiteSmoke
         */
        public static function whiteSmoke() : Hex8Color {
            return new Hex8Color("#F5F5F500");
        }

        /**
         * yellow
         * @return Hex8Color yellow
         */
        public static function yellow() : Hex8Color {
            return new Hex8Color("#FFFF0000");
        }

        /**
         * yellowGreen
         * @return Hex8Color yellowGreen
         */
        public static function yellowGreen() : Hex8Color {
            return new Hex8Color("#9ACD3200");
        }
    }
?>