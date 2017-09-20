<?php
    namespace Chameleon\Colors;

    use Exception;

    abstract class Color implements IColor {
        /**
         * {@inheritdoc}
         */
        public static abstract function fromRGBA(RGBAColor $rgba);

        /**
         * {@inheritdoc}
         */
        public abstract function getRGBA() : RGBAColor;

        /**
         * {@inheritdoc}
         */
        public abstract function lighten(float $percentage) : IColor;

        /**
         * {@inheritdoc}
         */
        public abstract function darken(float $percentage) : IColor;

        /**
         * {@inheritdoc}
         */
        public abstract function __toString(): string;

        /**
         * {@inheritdoc}
         */
        public final function getInt(): int {
            $rgba = $this -> getRGBA();

            $colorId = 0;
            $colorId |= $rgba -> getAlpha();
            $colorId <<= 8;
            $colorId |= $rgba -> getRed();
            $colorId <<= 8;
            $colorId |= $rgba -> getGreen();
            $colorId <<= 8;
            $colorId |= $rgba -> getBlue();

            return $colorId;
        }

        /**
         * Check if a value is in a legal range.
         *
         * @param float $value
         * @param float $min
         * @param float $max
         *
         * @return bool
         */
        protected function checkRange(float $value, float $min, float $max) : bool {
            return $value >= $min && $value <= $max;
        }

        /**
         * Convert a color to another color system.
         *
         * @api
         *
         * @param string $class The new color's FQCN, e.g. HSLColor::class
         *
         * @return IColor New color object of the desired color system
         * @throws Exception if $class is not a Chameleon\Colors\IColor
         */
        public function convertTo(string $class) : IColor {
            if (in_array(Color::class, class_parents($class))) {
                $class = (object) $class;
                return $class::fromRGBA($this -> getRGBA());
            }

            throw new Exception(sprintf('%s must extend %s to support converting between color systems!', $class, Color::class));
        }

        /**
         * Get an instance of this color from a 6 or 8 digit hexstring
         *
         * @param string $hexString The hexstring (#RRGGBB or #RRGGBBAA)
         *
         * @throws Exception If called from an invalid context
         */
        protected static final function fromHexString(string $hexString) {
            if (in_array(Color::class, class_parents(get_called_class()))) {
                // TODO: Convert string to int and get channel via bit shifting
                $red = hexdec(substr($hexString, 1, 2));
                $green = hexdec(substr($hexString, 3, 2));
                $blue = hexdec(substr($hexString, 5, 2));
                $alpha = hexdec(substr($hexString, 7, 2)) / 127;

                return static::fromRGBA(new RGBAColor($red, $green, $blue, $alpha));
            }

            throw new Exception(sprintf('%s must extend %s to support getting predefined colors!', get_called_class(), Color::class));
        }

        /**
         * transparent
         * @return mixed transparent
         */
        public static final function transparent() {
            return static::fromHexString("#0000007F");
        }

        /**
         * aliceBlue
         * @return mixed aliceBlue
         */
        public static final function aliceBlue() {
            return static::fromHexString("#F0F8FF00");
        }

        /**
         * antiqueWhite
         * @return mixed antiqueWhite
         */
        public static final function antiqueWhite() {
            return static::fromHexString("#FAEBD700");
        }

        /**
         * aqua
         * @return mixed aqua
         */
        public static final function aqua() {
            return static::fromHexString("#00FFFF00");
        }

        /**
         * aquamarine
         * @return mixed aquamarine
         */
        public static final function aquamarine() {
            return static::fromHexString("#7FFFD400");
        }

        /**
         * azure
         * @return mixed azure
         */
        public static final function azure() {
            return static::fromHexString("#F0FFFF00");
        }

        /**
         * beige
         * @return mixed beige
         */
        public static final function beige() {
            return static::fromHexString("#F5F5DC00");
        }

        /**
         * bisque
         * @return mixed bisque
         */
        public static final function bisque() {
            return static::fromHexString("#FFE4C400");
        }

        /**
         * black
         * @return mixed black
         */
        public static final function black() {
            return static::fromHexString("#00000000");
        }

        /**
         * blanchedAlmond
         * @return mixed blanchedAlmond
         */
        public static final function blanchedAlmond() {
            return static::fromHexString("#FFEBCD00");
        }

        /**
         * blue
         * @return mixed blue
         */
        public static final function blue() {
            return static::fromHexString("#0000FF00");
        }

        /**
         * blueViolet
         * @return mixed blueViolet
         */
        public static final function blueViolet() {
            return static::fromHexString("#8A2BE200");
        }

        /**
         * brown
         * @return mixed brown
         */
        public static final function brown() {
            return static::fromHexString("#A52A2A00");
        }

        /**
         * burlyWood
         * @return mixed burlyWood
         */
        public static final function burlyWood() {
            return static::fromHexString("#DEB88700");
        }

        /**
         * cadetBlue
         * @return mixed cadetBlue
         */
        public static final function cadetBlue() {
            return static::fromHexString("#5F9EA000");
        }

        /**
         * chartreuse
         * @return mixed chartreuse
         */
        public static final function chartreuse() {
            return static::fromHexString("#7FFF0000");
        }

        /**
         * chocolate
         * @return mixed chocolate
         */
        public static final function chocolate() {
            return static::fromHexString("#D2691E00");
        }

        /**
         * coral
         * @return mixed coral
         */
        public static final function coral() {
            return static::fromHexString("#FF7F5000");
        }

        /**
         * cornflowerBlue
         * @return mixed cornflowerBlue
         */
        public static final function cornflowerBlue() {
            return static::fromHexString("#6495ED00");
        }

        /**
         * cornsilk
         * @return mixed cornsilk
         */
        public static final function cornsilk() {
            return static::fromHexString("#FFF8DC00");
        }

        /**
         * crimson
         * @return mixed crimson
         */
        public static final function crimson() {
            return static::fromHexString("#DC143C00");
        }

        /**
         * cyan
         * @return mixed cyan
         */
        public static final function cyan() {
            return static::fromHexString("#00FFFF00");
        }

        /**
         * darkBlue
         * @return mixed darkBlue
         */
        public static final function darkBlue() {
            return static::fromHexString("#00008B00");
        }

        /**
         * darkCyan
         * @return mixed darkCyan
         */
        public static final function darkCyan() {
            return static::fromHexString("#008B8B00");
        }

        /**
         * darkGoldenRod
         * @return mixed darkGoldenRod
         */
        public static final function darkGoldenRod() {
            return static::fromHexString("#B8860B00");
        }

        /**
         * darkGray
         * @return mixed darkGray
         */
        public static final function darkGray() {
            return static::fromHexString("#A9A9A900");
        }

        /**
         * darkGrey
         * @return mixed darkGrey
         */
        public static final function darkGrey() {
            return static::fromHexString("#A9A9A900");
        }

        /**
         * darkGreen
         * @return mixed darkGreen
         */
        public static final function darkGreen() {
            return static::fromHexString("#00640000");
        }

        /**
         * darkKhaki
         * @return mixed darkKhaki
         */
        public static final function darkKhaki() {
            return static::fromHexString("#BDB76B00");
        }

        /**
         * darkMagenta
         * @return mixed darkMagenta
         */
        public static final function darkMagenta() {
            return static::fromHexString("#8B008B00");
        }

        /**
         * darkOliveGreen
         * @return mixed darkOliveGreen
         */
        public static final function darkOliveGreen() {
            return static::fromHexString("#556B2F00");
        }

        /**
         * darkOrange
         * @return mixed darkOrange
         */
        public static final function darkOrange() {
            return static::fromHexString("#FF8C0000");
        }

        /**
         * darkOrchid
         * @return mixed darkOrchid
         */
        public static final function darkOrchid() {
            return static::fromHexString("#9932CC00");
        }

        /**
         * darkRed
         * @return mixed darkRed
         */
        public static final function darkRed() {
            return static::fromHexString("#8B000000");
        }

        /**
         * darkSalmon
         * @return mixed darkSalmon
         */
        public static final function darkSalmon() {
            return static::fromHexString("#E9967A00");
        }

        /**
         * darkSeaGreen
         * @return mixed darkSeaGreen
         */
        public static final function darkSeaGreen() {
            return static::fromHexString("#8FBC8F00");
        }

        /**
         * darkSlateBlue
         * @return mixed darkSlateBlue
         */
        public static final function darkSlateBlue() {
            return static::fromHexString("#483D8B00");
        }

        /**
         * darkSlateGray
         * @return mixed darkSlateGray
         */
        public static final function darkSlateGray() {
            return static::fromHexString("#2F4F4F00");
        }

        /**
         * darkSlateGrey
         * @return mixed darkSlateGrey
         */
        public static final function darkSlateGrey() {
            return static::fromHexString("#2F4F4F00");
        }

        /**
         * darkTurquoise
         * @return mixed darkTurquoise
         */
        public static final function darkTurquoise() {
            return static::fromHexString("#00CED100");
        }

        /**
         * darkViolet
         * @return mixed darkViolet
         */
        public static final function darkViolet() {
            return static::fromHexString("#9400D300");
        }

        /**
         * deepPink
         * @return mixed deepPink
         */
        public static final function deepPink() {
            return static::fromHexString("#FF149300");
        }

        /**
         * deepSkyBlue
         * @return mixed deepSkyBlue
         */
        public static final function deepSkyBlue() {
            return static::fromHexString("#00BFFF00");
        }

        /**
         * dimGray
         * @return mixed dimGray
         */
        public static final function dimGray() {
            return static::fromHexString("#69696900");
        }

        /**
         * dimGrey
         * @return mixed dimGrey
         */
        public static final function dimGrey() {
            return static::fromHexString("#69696900");
        }

        /**
         * dodgerBlue
         * @return mixed dodgerBlue
         */
        public static final function dodgerBlue() {
            return static::fromHexString("#1E90FF00");
        }

        /**
         * fireBrick
         * @return mixed fireBrick
         */
        public static final function fireBrick() {
            return static::fromHexString("#B2222200");
        }

        /**
         * floralWhite
         * @return mixed floralWhite
         */
        public static final function floralWhite() {
            return static::fromHexString("#FFFAF000");
        }

        /**
         * forestGreen
         * @return mixed forestGreen
         */
        public static final function forestGreen() {
            return static::fromHexString("#228B2200");
        }

        /**
         * fuchsia
         * @return mixed fuchsia
         */
        public static final function fuchsia() {
            return static::fromHexString("#FF00FF00");
        }

        /**
         * gainsboro
         * @return mixed gainsboro
         */
        public static final function gainsboro() {
            return static::fromHexString("#DCDCDC00");
        }

        /**
         * ghostWhite
         * @return mixed ghostWhite
         */
        public static final function ghostWhite() {
            return static::fromHexString("#F8F8FF00");
        }

        /**
         * gold
         * @return mixed gold
         */
        public static final function gold() {
            return static::fromHexString("#FFD70000");
        }

        /**
         * goldenRod
         * @return mixed goldenRod
         */
        public static final function goldenRod() {
            return static::fromHexString("#DAA52000");
        }

        /**
         * gray
         * @return mixed gray
         */
        public static final function gray() {
            return static::fromHexString("#80808000");
        }

        /**
         * grey
         * @return mixed grey
         */
        public static final function grey() {
            return static::fromHexString("#80808000");
        }

        /**
         * green
         * @return mixed green
         */
        public static final function green() {
            return static::fromHexString("#00800000");
        }

        /**
         * greenYellow
         * @return mixed greenYellow
         */
        public static final function greenYellow() {
            return static::fromHexString("#ADFF2F00");
        }

        /**
         * honeyDew
         * @return mixed honeyDew
         */
        public static final function honeyDew() {
            return static::fromHexString("#F0FFF000");
        }

        /**
         * hotPink
         * @return mixed hotPink
         */
        public static final function hotPink() {
            return static::fromHexString("#FF69B400");
        }

        /**
         * indianRed
         * @return mixed indianRed
         */
        public static final function indianRed() {
            return static::fromHexString("#CD5C5C00");
        }

        /**
         * indigo
         * @return mixed indigo
         */
        public static final function indigo() {
            return static::fromHexString("#4B008200");
        }

        /**
         * ivory
         * @return mixed ivory
         */
        public static final function ivory() {
            return static::fromHexString("#FFFFF000");
        }

        /**
         * khaki
         * @return mixed khaki
         */
        public static final function khaki() {
            return static::fromHexString("#F0E68C00");
        }

        /**
         * lavender
         * @return mixed lavender
         */
        public static final function lavender() {
            return static::fromHexString("#E6E6FA00");
        }

        /**
         * lavenderBlush
         * @return mixed lavenderBlush
         */
        public static final function lavenderBlush() {
            return static::fromHexString("#FFF0F500");
        }

        /**
         * lawnGreen
         * @return mixed lawnGreen
         */
        public static final function lawnGreen() {
            return static::fromHexString("#7CFC0000");
        }

        /**
         * lemonChiffon
         * @return mixed lemonChiffon
         */
        public static final function lemonChiffon() {
            return static::fromHexString("#FFFACD00");
        }

        /**
         * lightBlue
         * @return mixed lightBlue
         */
        public static final function lightBlue() {
            return static::fromHexString("#ADD8E600");
        }

        /**
         * lightCoral
         * @return mixed lightCoral
         */
        public static final function lightCoral() {
            return static::fromHexString("#F0808000");
        }

        /**
         * lightCyan
         * @return mixed lightCyan
         */
        public static final function lightCyan() {
            return static::fromHexString("#E0FFFF00");
        }

        /**
         * lightGoldenRodYellow
         * @return mixed lightGoldenRodYellow
         */
        public static final function lightGoldenRodYellow() {
            return static::fromHexString("#FAFAD200");
        }

        /**
         * lightGray
         * @return mixed lightGray
         */
        public static final function lightGray() {
            return static::fromHexString("#D3D3D300");
        }

        /**
         * lightGrey
         * @return mixed lightGrey
         */
        public static final function lightGrey() {
            return static::fromHexString("#D3D3D300");
        }

        /**
         * lightGreen
         * @return mixed lightGreen
         */
        public static final function lightGreen() {
            return static::fromHexString("#90EE9000");
        }

        /**
         * lightPink
         * @return mixed lightPink
         */
        public static final function lightPink() {
            return static::fromHexString("#FFB6C100");
        }

        /**
         * lightSalmon
         * @return mixed lightSalmon
         */
        public static final function lightSalmon() {
            return static::fromHexString("#FFA07A00");
        }

        /**
         * lightSeaGreen
         * @return mixed lightSeaGreen
         */
        public static final function lightSeaGreen() {
            return static::fromHexString("#20B2AA00");
        }

        /**
         * lightSkyBlue
         * @return mixed lightSkyBlue
         */
        public static final function lightSkyBlue() {
            return static::fromHexString("#87CEFA00");
        }

        /**
         * lightSlateGray
         * @return mixed lightSlateGray
         */
        public static final function lightSlateGray() {
            return static::fromHexString("#77889900");
        }

        /**
         * lightSlateGrey
         * @return mixed lightSlateGrey
         */
        public static final function lightSlateGrey() {
            return static::fromHexString("#77889900");
        }

        /**
         * lightSteelBlue
         * @return mixed lightSteelBlue
         */
        public static final function lightSteelBlue() {
            return static::fromHexString("#B0C4DE00");
        }

        /**
         * lightYellow
         * @return mixed lightYellow
         */
        public static final function lightYellow() {
            return static::fromHexString("#FFFFE000");
        }

        /**
         * lime
         * @return mixed lime
         */
        public static final function lime() {
            return static::fromHexString("#00FF0000");
        }

        /**
         * limeGreen
         * @return mixed limeGreen
         */
        public static final function limeGreen() {
            return static::fromHexString("#32CD3200");
        }

        /**
         * linen
         * @return mixed linen
         */
        public static final function linen() {
            return static::fromHexString("#FAF0E600");
        }

        /**
         * magenta
         * @return mixed magenta
         */
        public static final function magenta() {
            return static::fromHexString("#FF00FF00");
        }

        /**
         * maroon
         * @return mixed maroon
         */
        public static final function maroon() {
            return static::fromHexString("#80000000");
        }

        /**
         * mediumAquaMarine
         * @return mixed mediumAquaMarine
         */
        public static final function mediumAquaMarine() {
            return static::fromHexString("#66CDAA00");
        }

        /**
         * mediumBlue
         * @return mixed mediumBlue
         */
        public static final function mediumBlue() {
            return static::fromHexString("#0000CD00");
        }

        /**
         * mediumOrchid
         * @return mixed mediumOrchid
         */
        public static final function mediumOrchid() {
            return static::fromHexString("#BA55D300");
        }

        /**
         * mediumPurple
         * @return mixed mediumPurple
         */
        public static final function mediumPurple() {
            return static::fromHexString("#9370DB00");
        }

        /**
         * mediumSeaGreen
         * @return mixed mediumSeaGreen
         */
        public static final function mediumSeaGreen() {
            return static::fromHexString("#3CB37100");
        }

        /**
         * mediumSlateBlue
         * @return mixed mediumSlateBlue
         */
        public static final function mediumSlateBlue() {
            return static::fromHexString("#7B68EE00");
        }

        /**
         * mediumSpringGreen
         * @return mixed mediumSpringGreen
         */
        public static final function mediumSpringGreen() {
            return static::fromHexString("#00FA9A00");
        }

        /**
         * mediumTurquoise
         * @return mixed mediumTurquoise
         */
        public static final function mediumTurquoise() {
            return static::fromHexString("#48D1CC00");
        }

        /**
         * mediumVioletRed
         * @return mixed mediumVioletRed
         */
        public static final function mediumVioletRed() {
            return static::fromHexString("#C7158500");
        }

        /**
         * midnightBlue
         * @return mixed midnightBlue
         */
        public static final function midnightBlue() {
            return static::fromHexString("#19197000");
        }

        /**
         * mintCream
         * @return mixed mintCream
         */
        public static final function mintCream() {
            return static::fromHexString("#F5FFFA00");
        }

        /**
         * mistyRose
         * @return mixed mistyRose
         */
        public static final function mistyRose() {
            return static::fromHexString("#FFE4E100");
        }

        /**
         * moccasin
         * @return mixed moccasin
         */
        public static final function moccasin() {
            return static::fromHexString("#FFE4B500");
        }

        /**
         * navajoWhite
         * @return mixed navajoWhite
         */
        public static final function navajoWhite() {
            return static::fromHexString("#FFDEAD00");
        }

        /**
         * navy
         * @return mixed navy
         */
        public static final function navy() {
            return static::fromHexString("#00008000");
        }

        /**
         * oldLace
         * @return mixed oldLace
         */
        public static final function oldLace() {
            return static::fromHexString("#FDF5E600");
        }

        /**
         * olive
         * @return mixed olive
         */
        public static final function olive() {
            return static::fromHexString("#80800000");
        }

        /**
         * oliveDrab
         * @return mixed oliveDrab
         */
        public static final function oliveDrab() {
            return static::fromHexString("#6B8E2300");
        }

        /**
         * orange
         * @return mixed orange
         */
        public static final function orange() {
            return static::fromHexString("#FFA50000");
        }

        /**
         * orangeRed
         * @return mixed orangeRed
         */
        public static final function orangeRed() {
            return static::fromHexString("#FF450000");
        }

        /**
         * orchid
         * @return mixed orchid
         */
        public static final function orchid() {
            return static::fromHexString("#DA70D600");
        }

        /**
         * paleGoldenRod
         * @return mixed paleGoldenRod
         */
        public static final function paleGoldenRod() {
            return static::fromHexString("#EEE8AA00");
        }

        /**
         * paleGreen
         * @return mixed paleGreen
         */
        public static final function paleGreen() {
            return static::fromHexString("#98FB9800");
        }

        /**
         * paleTurquoise
         * @return mixed paleTurquoise
         */
        public static final function paleTurquoise() {
            return static::fromHexString("#AFEEEE00");
        }

        /**
         * paleVioletRed
         * @return mixed paleVioletRed
         */
        public static final function paleVioletRed() {
            return static::fromHexString("#DB709300");
        }

        /**
         * papayaWhip
         * @return mixed papayaWhip
         */
        public static final function papayaWhip() {
            return static::fromHexString("#FFEFD500");
        }

        /**
         * peachPuff
         * @return mixed peachPuff
         */
        public static final function peachPuff() {
            return static::fromHexString("#FFDAB900");
        }

        /**
         * peru
         * @return mixed peru
         */
        public static final function peru() {
            return static::fromHexString("#CD853F00");
        }

        /**
         * pink
         * @return mixed pink
         */
        public static final function pink() {
            return static::fromHexString("#FFC0CB00");
        }

        /**
         * plum
         * @return mixed plum
         */
        public static final function plum() {
            return static::fromHexString("#DDA0DD00");
        }

        /**
         * powderBlue
         * @return mixed powderBlue
         */
        public static final function powderBlue() {
            return static::fromHexString("#B0E0E600");
        }

        /**
         * purple
         * @return mixed purple
         */
        public static final function purple() {
            return static::fromHexString("#80008000");
        }

        /**
         * rebeccaPurple
         * @return mixed rebeccaPurple
         */
        public static final function rebeccaPurple() {
            return static::fromHexString("#66339900");
        }

        /**
         * red
         * @return mixed red
         */
        public static final function red() {
            return static::fromHexString("#FF000000");
        }

        /**
         * rosyBrown
         * @return mixed rosyBrown
         */
        public static final function rosyBrown() {
            return static::fromHexString("#BC8F8F00");
        }

        /**
         * royalBlue
         * @return mixed royalBlue
         */
        public static final function royalBlue() {
            return static::fromHexString("#4169E100");
        }

        /**
         * saddleBrown
         * @return mixed saddleBrown
         */
        public static final function saddleBrown() {
            return static::fromHexString("#8B451300");
        }

        /**
         * salmon
         * @return mixed salmon
         */
        public static final function salmon() {
            return static::fromHexString("#FA807200");
        }

        /**
         * sandyBrown
         * @return mixed sandyBrown
         */
        public static final function sandyBrown() {
            return static::fromHexString("#F4A46000");
        }

        /**
         * seaGreen
         * @return mixed seaGreen
         */
        public static final function seaGreen() {
            return static::fromHexString("#2E8B5700");
        }

        /**
         * seaShell
         * @return mixed seaShell
         */
        public static final function seaShell() {
            return static::fromHexString("#FFF5EE00");
        }

        /**
         * sienna
         * @return mixed sienna
         */
        public static final function sienna() {
            return static::fromHexString("#A0522D00");
        }

        /**
         * silver
         * @return mixed silver
         */
        public static final function silver() {
            return static::fromHexString("#C0C0C000");
        }

        /**
         * skyBlue
         * @return mixed skyBlue
         */
        public static final function skyBlue() {
            return static::fromHexString("#87CEEB00");
        }

        /**
         * slateBlue
         * @return mixed slateBlue
         */
        public static final function slateBlue() {
            return static::fromHexString("#6A5ACD00");
        }

        /**
         * slateGray
         * @return mixed slateGray
         */
        public static final function slateGray() {
            return static::fromHexString("#70809000");
        }

        /**
         * slateGrey
         * @return mixed slateGrey
         */
        public static final function slateGrey() {
            return static::fromHexString("#70809000");
        }

        /**
         * snow
         * @return mixed snow
         */
        public static final function snow() {
            return static::fromHexString("#FFFAFA00");
        }

        /**
         * springGreen
         * @return mixed springGreen
         */
        public static final function springGreen() {
            return static::fromHexString("#00FF7F00");
        }

        /**
         * steelBlue
         * @return mixed steelBlue
         */
        public static final function steelBlue() {
            return static::fromHexString("#4682B400");
        }

        /**
         * tan
         * @return mixed tan
         */
        public static final function tan() {
            return static::fromHexString("#D2B48C00");
        }

        /**
         * teal
         * @return mixed teal
         */
        public static final function teal() {
            return static::fromHexString("#00808000");
        }

        /**
         * thistle
         * @return mixed thistle
         */
        public static final function thistle() {
            return static::fromHexString("#D8BFD800");
        }

        /**
         * tomato
         * @return mixed tomato
         */
        public static final function tomato() {
            return static::fromHexString("#FF634700");
        }

        /**
         * turquoise
         * @return mixed turquoise
         */
        public static final function turquoise() {
            return static::fromHexString("#40E0D000");
        }

        /**
         * violet
         * @return mixed violet
         */
        public static final function violet() {
            return static::fromHexString("#EE82EE00");
        }

        /**
         * wheat
         * @return mixed wheat
         */
        public static final function wheat() {
            return static::fromHexString("#F5DEB300");
        }

        /**
         * white
         * @return mixed white
         */
        public static final function white() {
            return static::fromHexString("#FFFFFF00");
        }

        /**
         * whiteSmoke
         * @return mixed whiteSmoke
         */
        public static final function whiteSmoke() {
            return static::fromHexString("#F5F5F500");
        }

        /**
         * yellow
         * @return mixed yellow
         */
        public static final function yellow() {
            return static::fromHexString("#FFFF0000");
        }

        /**
         * yellowGreen
         * @return mixed yellowGreen
         */
        public static final function yellowGreen() {
            return static::fromHexString("#9ACD3200");
        }
    }
?>