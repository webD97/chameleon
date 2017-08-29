<?php
    namespace Chameleon;

    use PHPUnit\Framework\TestCase;

    use Chameleon\ColorFactory;

    final class ColorFactoryTest extends TestCase {
        /**
         * @covers \Chameleon\ColorFactory::transparent
         */
        function testTransparent() {
            $this -> assertEquals("#0000007F", ColorFactory::transparent() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::aliceBlue
         */
        function testAliceBlue() {
            $this -> assertEquals("#F0F8FF00", ColorFactory::aliceBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::antiqueWhite
         */
        function testAntiqueWhite() {
            $this -> assertEquals("#FAEBD700", ColorFactory::antiqueWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::aqua
         */
        function testAqua() {
            $this -> assertEquals("#00FFFF00", ColorFactory::aqua() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::aquamarine
         */
        function testAquamarine() {
            $this -> assertEquals("#7FFFD400", ColorFactory::aquamarine() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::azure
         */
        function testAzure() {
            $this -> assertEquals("#F0FFFF00", ColorFactory::azure() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::beige
         */
        function testBeige() {
            $this -> assertEquals("#F5F5DC00", ColorFactory::beige() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::bisque
         */
        function testBisque() {
            $this -> assertEquals("#FFE4C400", ColorFactory::bisque() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::black
         */
        function testBlack() {
            $this -> assertEquals("#00000000", ColorFactory::black() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::blanchedAlmond
         */
        function testBlanchedAlmond() {
            $this -> assertEquals("#FFEBCD00", ColorFactory::blanchedAlmond() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::blue
         */
        function testBlue() {
            $this -> assertEquals("#0000FF00", ColorFactory::blue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::blueViolet
         */
        function testBlueViolet() {
            $this -> assertEquals("#8A2BE200", ColorFactory::blueViolet() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::brown
         */
        function testBrown() {
            $this -> assertEquals("#A52A2A00", ColorFactory::brown() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::burlyWood
         */
        function testBurlyWood() {
            $this -> assertEquals("#DEB88700", ColorFactory::burlyWood() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::cadetBlue
         */
        function testCadetBlue() {
            $this -> assertEquals("#5F9EA000", ColorFactory::cadetBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::chartreuse
         */
        function testChartreuse() {
            $this -> assertEquals("#7FFF0000", ColorFactory::chartreuse() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::chocolate
         */
        function testChocolate() {
            $this -> assertEquals("#D2691E00", ColorFactory::chocolate() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::coral
         */
        function testCoral() {
            $this -> assertEquals("#FF7F5000", ColorFactory::coral() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::cornflowerBlue
         */
        function testCornflowerBlue() {
            $this -> assertEquals("#6495ED00", ColorFactory::cornflowerBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::cornsilk
         */
        function testCornsilk() {
            $this -> assertEquals("#FFF8DC00", ColorFactory::cornsilk() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::crimson
         */
        function testCrimson() {
            $this -> assertEquals("#DC143C00", ColorFactory::crimson() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::cyan
         */
        function testCyan() {
            $this -> assertEquals("#00FFFF00", ColorFactory::cyan() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkBlue
         */
        function testDarkBlue() {
            $this -> assertEquals("#00008B00", ColorFactory::darkBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkCyan
         */
        function testDarkCyan() {
            $this -> assertEquals("#008B8B00", ColorFactory::darkCyan() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkGoldenRod
         */
        function testDarkGoldenRod() {
            $this -> assertEquals("#B8860B00", ColorFactory::darkGoldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkGray
         */
        function testDarkGray() {
            $this -> assertEquals("#A9A9A900", ColorFactory::darkGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkGrey
         */
        function testDarkGrey() {
            $this -> assertEquals("#A9A9A900", ColorFactory::darkGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkGreen
         */
        function testDarkGreen() {
            $this -> assertEquals("#00640000", ColorFactory::darkGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkKhaki
         */
        function testDarkKhaki() {
            $this -> assertEquals("#BDB76B00", ColorFactory::darkKhaki() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkMagenta
         */
        function testDarkMagenta() {
            $this -> assertEquals("#8B008B00", ColorFactory::darkMagenta() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkOliveGreen
         */
        function testDarkOliveGreen() {
            $this -> assertEquals("#556B2F00", ColorFactory::darkOliveGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkOrange
         */
        function testDarkOrange() {
            $this -> assertEquals("#FF8C0000", ColorFactory::darkOrange() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkOrchid
         */
        function testDarkOrchid() {
            $this -> assertEquals("#9932CC00", ColorFactory::darkOrchid() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkRed
         */
        function testDarkRed() {
            $this -> assertEquals("#8B000000", ColorFactory::darkRed() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkSalmon
         */
        function testDarkSalmon() {
            $this -> assertEquals("#E9967A00", ColorFactory::darkSalmon() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkSeaGreen
         */
        function testDarkSeaGreen() {
            $this -> assertEquals("#8FBC8F00", ColorFactory::darkSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkSlateBlue
         */
        function testDarkSlateBlue() {
            $this -> assertEquals("#483D8B00", ColorFactory::darkSlateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkSlateGray
         */
        function testDarkSlateGray() {
            $this -> assertEquals("#2F4F4F00", ColorFactory::darkSlateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkSlateGrey
         */
        function testDarkSlateGrey() {
            $this -> assertEquals("#2F4F4F00", ColorFactory::darkSlateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkTurquoise
         */
        function testDarkTurquoise() {
            $this -> assertEquals("#00CED100", ColorFactory::darkTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::darkViolet
         */
        function testDarkViolet() {
            $this -> assertEquals("#9400D300", ColorFactory::darkViolet() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::deepPink
         */
        function testDeepPink() {
            $this -> assertEquals("#FF149300", ColorFactory::deepPink() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::deepSkyBlue
         */
        function testDeepSkyBlue() {
            $this -> assertEquals("#00BFFF00", ColorFactory::deepSkyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::dimGray
         */
        function testDimGray() {
            $this -> assertEquals("#69696900", ColorFactory::dimGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::dimGrey
         */
        function testDimGrey() {
            $this -> assertEquals("#69696900", ColorFactory::dimGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::dodgerBlue
         */
        function testDodgerBlue() {
            $this -> assertEquals("#1E90FF00", ColorFactory::dodgerBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::fireBrick
         */
        function testFireBrick() {
            $this -> assertEquals("#B2222200", ColorFactory::fireBrick() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::floralWhite
         */
        function testFloralWhite() {
            $this -> assertEquals("#FFFAF000", ColorFactory::floralWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::forestGreen
         */
        function testForestGreen() {
            $this -> assertEquals("#228B2200", ColorFactory::forestGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::fuchsia
         */
        function testFuchsia() {
            $this -> assertEquals("#FF00FF00", ColorFactory::fuchsia() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::gainsboro
         */
        function testGainsboro() {
            $this -> assertEquals("#DCDCDC00", ColorFactory::gainsboro() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::ghostWhite
         */
        function testGhostWhite() {
            $this -> assertEquals("#F8F8FF00", ColorFactory::ghostWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::gold
         */
        function testGold() {
            $this -> assertEquals("#FFD70000", ColorFactory::gold() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::goldenRod
         */
        function testGoldenRod() {
            $this -> assertEquals("#DAA52000", ColorFactory::goldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::gray
         */
        function testGray() {
            $this -> assertEquals("#80808000", ColorFactory::gray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::grey
         */
        function testGrey() {
            $this -> assertEquals("#80808000", ColorFactory::grey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::green
         */
        function testGreen() {
            $this -> assertEquals("#00800000", ColorFactory::green() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::greenYellow
         */
        function testGreenYellow() {
            $this -> assertEquals("#ADFF2F00", ColorFactory::greenYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::honeyDew
         */
        function testHoneyDew() {
            $this -> assertEquals("#F0FFF000", ColorFactory::honeyDew() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::hotPink
         */
        function testHotPink() {
            $this -> assertEquals("#FF69B400", ColorFactory::hotPink() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::indianRed
         */
        function testIndianRed() {
            $this -> assertEquals("#CD5C5C00", ColorFactory::indianRed() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::indigo
         */
        function testIndigo() {
            $this -> assertEquals("#4B008200", ColorFactory::indigo() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::ivory
         */
        function testIvory() {
            $this -> assertEquals("#FFFFF000", ColorFactory::ivory() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::khaki
         */
        function testKhaki() {
            $this -> assertEquals("#F0E68C00", ColorFactory::khaki() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lavender
         */
        function testLavender() {
            $this -> assertEquals("#E6E6FA00", ColorFactory::lavender() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lavenderBlush
         */
        function testLavenderBlush() {
            $this -> assertEquals("#FFF0F500", ColorFactory::lavenderBlush() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lawnGreen
         */
        function testLawnGreen() {
            $this -> assertEquals("#7CFC0000", ColorFactory::lawnGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lemonChiffon
         */
        function testLemonChiffon() {
            $this -> assertEquals("#FFFACD00", ColorFactory::lemonChiffon() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightBlue
         */
        function testLightBlue() {
            $this -> assertEquals("#ADD8E600", ColorFactory::lightBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightCoral
         */
        function testLightCoral() {
            $this -> assertEquals("#F0808000", ColorFactory::lightCoral() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightCyan
         */
        function testLightCyan() {
            $this -> assertEquals("#E0FFFF00", ColorFactory::lightCyan() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightGoldenRodYellow
         */
        function testLightGoldenRodYellow() {
            $this -> assertEquals("#FAFAD200", ColorFactory::lightGoldenRodYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightGray
         */
        function testLightGray() {
            $this -> assertEquals("#D3D3D300", ColorFactory::lightGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightGrey
         */
        function testLightGrey() {
            $this -> assertEquals("#D3D3D300", ColorFactory::lightGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightGreen
         */
        function testLightGreen() {
            $this -> assertEquals("#90EE9000", ColorFactory::lightGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightPink
         */
        function testLightPink() {
            $this -> assertEquals("#FFB6C100", ColorFactory::lightPink() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSalmon
         */
        function testLightSalmon() {
            $this -> assertEquals("#FFA07A00", ColorFactory::lightSalmon() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSeaGreen
         */
        function testLightSeaGreen() {
            $this -> assertEquals("#20B2AA00", ColorFactory::lightSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSkyBlue
         */
        function testLightSkyBlue() {
            $this -> assertEquals("#87CEFA00", ColorFactory::lightSkyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSlateGray
         */
        function testLightSlateGray() {
            $this -> assertEquals("#77889900", ColorFactory::lightSlateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSlateGrey
         */
        function testLightSlateGrey() {
            $this -> assertEquals("#77889900", ColorFactory::lightSlateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightSteelBlue
         */
        function testLightSteelBlue() {
            $this -> assertEquals("#B0C4DE00", ColorFactory::lightSteelBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lightYellow
         */
        function testLightYellow() {
            $this -> assertEquals("#FFFFE000", ColorFactory::lightYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::lime
         */
        function testLime() {
            $this -> assertEquals("#00FF0000", ColorFactory::lime() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::limeGreen
         */
        function testLimeGreen() {
            $this -> assertEquals("#32CD3200", ColorFactory::limeGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::linen
         */
        function testLinen() {
            $this -> assertEquals("#FAF0E600", ColorFactory::linen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::magenta
         */
        function testMagenta() {
            $this -> assertEquals("#FF00FF00", ColorFactory::magenta() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::maroon
         */
        function testMaroon() {
            $this -> assertEquals("#80000000", ColorFactory::maroon() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumAquaMarine
         */
        function testMediumAquaMarine() {
            $this -> assertEquals("#66CDAA00", ColorFactory::mediumAquaMarine() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumBlue
         */
        function testMediumBlue() {
            $this -> assertEquals("#0000CD00", ColorFactory::mediumBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumOrchid
         */
        function testMediumOrchid() {
            $this -> assertEquals("#BA55D300", ColorFactory::mediumOrchid() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumPurple
         */
        function testMediumPurple() {
            $this -> assertEquals("#9370DB00", ColorFactory::mediumPurple() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumSeaGreen
         */
        function testMediumSeaGreen() {
            $this -> assertEquals("#3CB37100", ColorFactory::mediumSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumSlateBlue
         */
        function testMediumSlateBlue() {
            $this -> assertEquals("#7B68EE00", ColorFactory::mediumSlateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumSpringGreen
         */
        function testMediumSpringGreen() {
            $this -> assertEquals("#00FA9A00", ColorFactory::mediumSpringGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumTurquoise
         */
        function testMediumTurquoise() {
            $this -> assertEquals("#48D1CC00", ColorFactory::mediumTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mediumVioletRed
         */
        function testMediumVioletRed() {
            $this -> assertEquals("#C7158500", ColorFactory::mediumVioletRed() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::midnightBlue
         */
        function testMidnightBlue() {
            $this -> assertEquals("#19197000", ColorFactory::midnightBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mintCream
         */
        function testMintCream() {
            $this -> assertEquals("#F5FFFA00", ColorFactory::mintCream() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::mistyRose
         */
        function testMistyRose() {
            $this -> assertEquals("#FFE4E100", ColorFactory::mistyRose() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::moccasin
         */
        function testMoccasin() {
            $this -> assertEquals("#FFE4B500", ColorFactory::moccasin() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::navajoWhite
         */
        function testNavajoWhite() {
            $this -> assertEquals("#FFDEAD00", ColorFactory::navajoWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::navy
         */
        function testNavy() {
            $this -> assertEquals("#00008000", ColorFactory::navy() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::oldLace
         */
        function testOldLace() {
            $this -> assertEquals("#FDF5E600", ColorFactory::oldLace() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::olive
         */
        function testOlive() {
            $this -> assertEquals("#80800000", ColorFactory::olive() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::oliveDrab
         */
        function testOliveDrab() {
            $this -> assertEquals("#6B8E2300", ColorFactory::oliveDrab() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::orange
         */
        function testOrange() {
            $this -> assertEquals("#FFA50000", ColorFactory::orange() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::orangeRed
         */
        function testOrangeRed() {
            $this -> assertEquals("#FF450000", ColorFactory::orangeRed() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::orchid
         */
        function testOrchid() {
            $this -> assertEquals("#DA70D600", ColorFactory::orchid() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::paleGoldenRod
         */
        function testPaleGoldenRod() {
            $this -> assertEquals("#EEE8AA00", ColorFactory::paleGoldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::paleGreen
         */
        function testPaleGreen() {
            $this -> assertEquals("#98FB9800", ColorFactory::paleGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::paleTurquoise
         */
        function testPaleTurquoise() {
            $this -> assertEquals("#AFEEEE00", ColorFactory::paleTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::paleVioletRed
         */
        function testPaleVioletRed() {
            $this -> assertEquals("#DB709300", ColorFactory::paleVioletRed() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::papayaWhip
         */
        function testPapayaWhip() {
            $this -> assertEquals("#FFEFD500", ColorFactory::papayaWhip() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::peachPuff
         */
        function testPeachPuff() {
            $this -> assertEquals("#FFDAB900", ColorFactory::peachPuff() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::peru
         */
        function testPeru() {
            $this -> assertEquals("#CD853F00", ColorFactory::peru() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::pink
         */
        function testPink() {
            $this -> assertEquals("#FFC0CB00", ColorFactory::pink() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::plum
         */
        function testPlum() {
            $this -> assertEquals("#DDA0DD00", ColorFactory::plum() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::powderBlue
         */
        function testPowderBlue() {
            $this -> assertEquals("#B0E0E600", ColorFactory::powderBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::purple
         */
        function testPurple() {
            $this -> assertEquals("#80008000", ColorFactory::purple() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::rebeccaPurple
         */
        function testRebeccaPurple() {
            $this -> assertEquals("#66339900", ColorFactory::rebeccaPurple() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::red
         */
        function testRed() {
            $this -> assertEquals("#FF000000", ColorFactory::red() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::rosyBrown
         */
        function testRosyBrown() {
            $this -> assertEquals("#BC8F8F00", ColorFactory::rosyBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::royalBlue
         */
        function testRoyalBlue() {
            $this -> assertEquals("#4169E100", ColorFactory::royalBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::saddleBrown
         */
        function testSaddleBrown() {
            $this -> assertEquals("#8B451300", ColorFactory::saddleBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::salmon
         */
        function testSalmon() {
            $this -> assertEquals("#FA807200", ColorFactory::salmon() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::sandyBrown
         */
        function testSandyBrown() {
            $this -> assertEquals("#F4A46000", ColorFactory::sandyBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::seaGreen
         */
        function testSeaGreen() {
            $this -> assertEquals("#2E8B5700", ColorFactory::seaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::seaShell
         */
        function testSeaShell() {
            $this -> assertEquals("#FFF5EE00", ColorFactory::seaShell() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::sienna
         */
        function testSienna() {
            $this -> assertEquals("#A0522D00", ColorFactory::sienna() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::silver
         */
        function testSilver() {
            $this -> assertEquals("#C0C0C000", ColorFactory::silver() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::skyBlue
         */
        function testSkyBlue() {
            $this -> assertEquals("#87CEEB00", ColorFactory::skyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::slateBlue
         */
        function testSlateBlue() {
            $this -> assertEquals("#6A5ACD00", ColorFactory::slateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::slateGray
         */
        function testSlateGray() {
            $this -> assertEquals("#70809000", ColorFactory::slateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::slateGrey
         */
        function testSlateGrey() {
            $this -> assertEquals("#70809000", ColorFactory::slateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::snow
         */
        function testSnow() {
            $this -> assertEquals("#FFFAFA00", ColorFactory::snow() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::springGreen
         */
        function testSpringGreen() {
            $this -> assertEquals("#00FF7F00", ColorFactory::springGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::steelBlue
         */
        function testSteelBlue() {
            $this -> assertEquals("#4682B400", ColorFactory::steelBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::tan
         */
        function testTan() {
            $this -> assertEquals("#D2B48C00", ColorFactory::tan() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::teal
         */
        function testTeal() {
            $this -> assertEquals("#00808000", ColorFactory::teal() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::thistle
         */
        function testThistle() {
            $this -> assertEquals("#D8BFD800", ColorFactory::thistle() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::tomato
         */
        function testTomato() {
            $this -> assertEquals("#FF634700", ColorFactory::tomato() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::turquoise
         */
        function testTurquoise() {
            $this -> assertEquals("#40E0D000", ColorFactory::turquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::violet
         */
        function testViolet() {
            $this -> assertEquals("#EE82EE00", ColorFactory::violet() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::wheat
         */
        function testWheat() {
            $this -> assertEquals("#F5DEB300", ColorFactory::wheat() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::white
         */
        function testWhite() {
            $this -> assertEquals("#FFFFFF00", ColorFactory::white() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::whiteSmoke
         */
        function testWhiteSmoke() {
            $this -> assertEquals("#F5F5F500", ColorFactory::whiteSmoke() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::yellow
         */
        function testYellow() {
            $this -> assertEquals("#FFFF0000", ColorFactory::yellow() -> getHex());
        }

        /**
         * @covers \Chameleon\ColorFactory::yellowGreen
         */
        function testYellowGreen() {
            $this -> assertEquals("#9ACD3200", ColorFactory::yellowGreen() -> getHex());
        }
    }
?>