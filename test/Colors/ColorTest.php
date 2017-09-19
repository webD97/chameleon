<?php
    namespace Chameleon\Colors;

    use PHPUnit\Framework\TestCase;

    final class ColorTest extends TestCase {
        /**
         * @covers \Chameleon\Colors\Color::transparent
         */
        function testTransparent() {
            $this -> assertEquals("#0000007F", Hex8Color::transparent() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::aliceBlue
         */
        function testAliceBlue() {
            $this -> assertEquals("#F0F8FF00", Hex8Color::aliceBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::antiqueWhite
         */
        function testAntiqueWhite() {
            $this -> assertEquals("#FAEBD700", Hex8Color::antiqueWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::aqua
         */
        function testAqua() {
            $this -> assertEquals("#00FFFF00", Hex8Color::aqua() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::aquamarine
         */
        function testAquamarine() {
            $this -> assertEquals("#7FFFD400", Hex8Color::aquamarine() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::azure
         */
        function testAzure() {
            $this -> assertEquals("#F0FFFF00", Hex8Color::azure() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::beige
         */
        function testBeige() {
            $this -> assertEquals("#F5F5DC00", Hex8Color::beige() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::bisque
         */
        function testBisque() {
            $this -> assertEquals("#FFE4C400", Hex8Color::bisque() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::black
         */
        function testBlack() {
            $this -> assertEquals("#00000000", Hex8Color::black() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::blanchedAlmond
         */
        function testBlanchedAlmond() {
            $this -> assertEquals("#FFEBCD00", Hex8Color::blanchedAlmond() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::blue
         */
        function testBlue() {
            $this -> assertEquals("#0000FF00", Hex8Color::blue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::blueViolet
         */
        function testBlueViolet() {
            $this -> assertEquals("#8A2BE200", Hex8Color::blueViolet() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::brown
         */
        function testBrown() {
            $this -> assertEquals("#A52A2A00", Hex8Color::brown() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::burlyWood
         */
        function testBurlyWood() {
            $this -> assertEquals("#DEB88700", Hex8Color::burlyWood() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::cadetBlue
         */
        function testCadetBlue() {
            $this -> assertEquals("#5F9EA000", Hex8Color::cadetBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::chartreuse
         */
        function testChartreuse() {
            $this -> assertEquals("#7FFF0000", Hex8Color::chartreuse() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::chocolate
         */
        function testChocolate() {
            $this -> assertEquals("#D2691E00", Hex8Color::chocolate() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::coral
         */
        function testCoral() {
            $this -> assertEquals("#FF7F5000", Hex8Color::coral() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::cornflowerBlue
         */
        function testCornflowerBlue() {
            $this -> assertEquals("#6495ED00", Hex8Color::cornflowerBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::cornsilk
         */
        function testCornsilk() {
            $this -> assertEquals("#FFF8DC00", Hex8Color::cornsilk() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::crimson
         */
        function testCrimson() {
            $this -> assertEquals("#DC143C00", Hex8Color::crimson() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::cyan
         */
        function testCyan() {
            $this -> assertEquals("#00FFFF00", Hex8Color::cyan() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkBlue
         */
        function testDarkBlue() {
            $this -> assertEquals("#00008B00", Hex8Color::darkBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkCyan
         */
        function testDarkCyan() {
            $this -> assertEquals("#008B8B00", Hex8Color::darkCyan() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkGoldenRod
         */
        function testDarkGoldenRod() {
            $this -> assertEquals("#B8860B00", Hex8Color::darkGoldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkGray
         */
        function testDarkGray() {
            $this -> assertEquals("#A9A9A900", Hex8Color::darkGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkGrey
         */
        function testDarkGrey() {
            $this -> assertEquals("#A9A9A900", Hex8Color::darkGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkGreen
         */
        function testDarkGreen() {
            $this -> assertEquals("#00640000", Hex8Color::darkGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkKhaki
         */
        function testDarkKhaki() {
            $this -> assertEquals("#BDB76B00", Hex8Color::darkKhaki() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkMagenta
         */
        function testDarkMagenta() {
            $this -> assertEquals("#8B008B00", Hex8Color::darkMagenta() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkOliveGreen
         */
        function testDarkOliveGreen() {
            $this -> assertEquals("#556B2F00", Hex8Color::darkOliveGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkOrange
         */
        function testDarkOrange() {
            $this -> assertEquals("#FF8C0000", Hex8Color::darkOrange() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkOrchid
         */
        function testDarkOrchid() {
            $this -> assertEquals("#9932CC00", Hex8Color::darkOrchid() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkRed
         */
        function testDarkRed() {
            $this -> assertEquals("#8B000000", Hex8Color::darkRed() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkSalmon
         */
        function testDarkSalmon() {
            $this -> assertEquals("#E9967A00", Hex8Color::darkSalmon() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkSeaGreen
         */
        function testDarkSeaGreen() {
            $this -> assertEquals("#8FBC8F00", Hex8Color::darkSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkSlateBlue
         */
        function testDarkSlateBlue() {
            $this -> assertEquals("#483D8B00", Hex8Color::darkSlateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkSlateGray
         */
        function testDarkSlateGray() {
            $this -> assertEquals("#2F4F4F00", Hex8Color::darkSlateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkSlateGrey
         */
        function testDarkSlateGrey() {
            $this -> assertEquals("#2F4F4F00", Hex8Color::darkSlateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkTurquoise
         */
        function testDarkTurquoise() {
            $this -> assertEquals("#00CED100", Hex8Color::darkTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::darkViolet
         */
        function testDarkViolet() {
            $this -> assertEquals("#9400D300", Hex8Color::darkViolet() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::deepPink
         */
        function testDeepPink() {
            $this -> assertEquals("#FF149300", Hex8Color::deepPink() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::deepSkyBlue
         */
        function testDeepSkyBlue() {
            $this -> assertEquals("#00BFFF00", Hex8Color::deepSkyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::dimGray
         */
        function testDimGray() {
            $this -> assertEquals("#69696900", Hex8Color::dimGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::dimGrey
         */
        function testDimGrey() {
            $this -> assertEquals("#69696900", Hex8Color::dimGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::dodgerBlue
         */
        function testDodgerBlue() {
            $this -> assertEquals("#1E90FF00", Hex8Color::dodgerBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::fireBrick
         */
        function testFireBrick() {
            $this -> assertEquals("#B2222200", Hex8Color::fireBrick() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::floralWhite
         */
        function testFloralWhite() {
            $this -> assertEquals("#FFFAF000", Hex8Color::floralWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::forestGreen
         */
        function testForestGreen() {
            $this -> assertEquals("#228B2200", Hex8Color::forestGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::fuchsia
         */
        function testFuchsia() {
            $this -> assertEquals("#FF00FF00", Hex8Color::fuchsia() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::gainsboro
         */
        function testGainsboro() {
            $this -> assertEquals("#DCDCDC00", Hex8Color::gainsboro() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::ghostWhite
         */
        function testGhostWhite() {
            $this -> assertEquals("#F8F8FF00", Hex8Color::ghostWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::gold
         */
        function testGold() {
            $this -> assertEquals("#FFD70000", Hex8Color::gold() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::goldenRod
         */
        function testGoldenRod() {
            $this -> assertEquals("#DAA52000", Hex8Color::goldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::gray
         */
        function testGray() {
            $this -> assertEquals("#80808000", Hex8Color::gray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::grey
         */
        function testGrey() {
            $this -> assertEquals("#80808000", Hex8Color::grey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::green
         */
        function testGreen() {
            $this -> assertEquals("#00800000", Hex8Color::green() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::greenYellow
         */
        function testGreenYellow() {
            $this -> assertEquals("#ADFF2F00", Hex8Color::greenYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::honeyDew
         */
        function testHoneyDew() {
            $this -> assertEquals("#F0FFF000", Hex8Color::honeyDew() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::hotPink
         */
        function testHotPink() {
            $this -> assertEquals("#FF69B400", Hex8Color::hotPink() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::indianRed
         */
        function testIndianRed() {
            $this -> assertEquals("#CD5C5C00", Hex8Color::indianRed() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::indigo
         */
        function testIndigo() {
            $this -> assertEquals("#4B008200", Hex8Color::indigo() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::ivory
         */
        function testIvory() {
            $this -> assertEquals("#FFFFF000", Hex8Color::ivory() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::khaki
         */
        function testKhaki() {
            $this -> assertEquals("#F0E68C00", Hex8Color::khaki() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lavender
         */
        function testLavender() {
            $this -> assertEquals("#E6E6FA00", Hex8Color::lavender() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lavenderBlush
         */
        function testLavenderBlush() {
            $this -> assertEquals("#FFF0F500", Hex8Color::lavenderBlush() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lawnGreen
         */
        function testLawnGreen() {
            $this -> assertEquals("#7CFC0000", Hex8Color::lawnGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lemonChiffon
         */
        function testLemonChiffon() {
            $this -> assertEquals("#FFFACD00", Hex8Color::lemonChiffon() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightBlue
         */
        function testLightBlue() {
            $this -> assertEquals("#ADD8E600", Hex8Color::lightBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightCoral
         */
        function testLightCoral() {
            $this -> assertEquals("#F0808000", Hex8Color::lightCoral() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightCyan
         */
        function testLightCyan() {
            $this -> assertEquals("#E0FFFF00", Hex8Color::lightCyan() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightGoldenRodYellow
         */
        function testLightGoldenRodYellow() {
            $this -> assertEquals("#FAFAD200", Hex8Color::lightGoldenRodYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightGray
         */
        function testLightGray() {
            $this -> assertEquals("#D3D3D300", Hex8Color::lightGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightGrey
         */
        function testLightGrey() {
            $this -> assertEquals("#D3D3D300", Hex8Color::lightGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightGreen
         */
        function testLightGreen() {
            $this -> assertEquals("#90EE9000", Hex8Color::lightGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightPink
         */
        function testLightPink() {
            $this -> assertEquals("#FFB6C100", Hex8Color::lightPink() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSalmon
         */
        function testLightSalmon() {
            $this -> assertEquals("#FFA07A00", Hex8Color::lightSalmon() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSeaGreen
         */
        function testLightSeaGreen() {
            $this -> assertEquals("#20B2AA00", Hex8Color::lightSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSkyBlue
         */
        function testLightSkyBlue() {
            $this -> assertEquals("#87CEFA00", Hex8Color::lightSkyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSlateGray
         */
        function testLightSlateGray() {
            $this -> assertEquals("#77889900", Hex8Color::lightSlateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSlateGrey
         */
        function testLightSlateGrey() {
            $this -> assertEquals("#77889900", Hex8Color::lightSlateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightSteelBlue
         */
        function testLightSteelBlue() {
            $this -> assertEquals("#B0C4DE00", Hex8Color::lightSteelBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lightYellow
         */
        function testLightYellow() {
            $this -> assertEquals("#FFFFE000", Hex8Color::lightYellow() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::lime
         */
        function testLime() {
            $this -> assertEquals("#00FF0000", Hex8Color::lime() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::limeGreen
         */
        function testLimeGreen() {
            $this -> assertEquals("#32CD3200", Hex8Color::limeGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::linen
         */
        function testLinen() {
            $this -> assertEquals("#FAF0E600", Hex8Color::linen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::magenta
         */
        function testMagenta() {
            $this -> assertEquals("#FF00FF00", Hex8Color::magenta() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::maroon
         */
        function testMaroon() {
            $this -> assertEquals("#80000000", Hex8Color::maroon() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumAquaMarine
         */
        function testMediumAquaMarine() {
            $this -> assertEquals("#66CDAA00", Hex8Color::mediumAquaMarine() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumBlue
         */
        function testMediumBlue() {
            $this -> assertEquals("#0000CD00", Hex8Color::mediumBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumOrchid
         */
        function testMediumOrchid() {
            $this -> assertEquals("#BA55D300", Hex8Color::mediumOrchid() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumPurple
         */
        function testMediumPurple() {
            $this -> assertEquals("#9370DB00", Hex8Color::mediumPurple() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumSeaGreen
         */
        function testMediumSeaGreen() {
            $this -> assertEquals("#3CB37100", Hex8Color::mediumSeaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumSlateBlue
         */
        function testMediumSlateBlue() {
            $this -> assertEquals("#7B68EE00", Hex8Color::mediumSlateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumSpringGreen
         */
        function testMediumSpringGreen() {
            $this -> assertEquals("#00FA9A00", Hex8Color::mediumSpringGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumTurquoise
         */
        function testMediumTurquoise() {
            $this -> assertEquals("#48D1CC00", Hex8Color::mediumTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mediumVioletRed
         */
        function testMediumVioletRed() {
            $this -> assertEquals("#C7158500", Hex8Color::mediumVioletRed() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::midnightBlue
         */
        function testMidnightBlue() {
            $this -> assertEquals("#19197000", Hex8Color::midnightBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mintCream
         */
        function testMintCream() {
            $this -> assertEquals("#F5FFFA00", Hex8Color::mintCream() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::mistyRose
         */
        function testMistyRose() {
            $this -> assertEquals("#FFE4E100", Hex8Color::mistyRose() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::moccasin
         */
        function testMoccasin() {
            $this -> assertEquals("#FFE4B500", Hex8Color::moccasin() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::navajoWhite
         */
        function testNavajoWhite() {
            $this -> assertEquals("#FFDEAD00", Hex8Color::navajoWhite() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::navy
         */
        function testNavy() {
            $this -> assertEquals("#00008000", Hex8Color::navy() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::oldLace
         */
        function testOldLace() {
            $this -> assertEquals("#FDF5E600", Hex8Color::oldLace() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::olive
         */
        function testOlive() {
            $this -> assertEquals("#80800000", Hex8Color::olive() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::oliveDrab
         */
        function testOliveDrab() {
            $this -> assertEquals("#6B8E2300", Hex8Color::oliveDrab() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::orange
         */
        function testOrange() {
            $this -> assertEquals("#FFA50000", Hex8Color::orange() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::orangeRed
         */
        function testOrangeRed() {
            $this -> assertEquals("#FF450000", Hex8Color::orangeRed() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::orchid
         */
        function testOrchid() {
            $this -> assertEquals("#DA70D600", Hex8Color::orchid() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::paleGoldenRod
         */
        function testPaleGoldenRod() {
            $this -> assertEquals("#EEE8AA00", Hex8Color::paleGoldenRod() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::paleGreen
         */
        function testPaleGreen() {
            $this -> assertEquals("#98FB9800", Hex8Color::paleGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::paleTurquoise
         */
        function testPaleTurquoise() {
            $this -> assertEquals("#AFEEEE00", Hex8Color::paleTurquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::paleVioletRed
         */
        function testPaleVioletRed() {
            $this -> assertEquals("#DB709300", Hex8Color::paleVioletRed() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::papayaWhip
         */
        function testPapayaWhip() {
            $this -> assertEquals("#FFEFD500", Hex8Color::papayaWhip() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::peachPuff
         */
        function testPeachPuff() {
            $this -> assertEquals("#FFDAB900", Hex8Color::peachPuff() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::peru
         */
        function testPeru() {
            $this -> assertEquals("#CD853F00", Hex8Color::peru() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::pink
         */
        function testPink() {
            $this -> assertEquals("#FFC0CB00", Hex8Color::pink() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::plum
         */
        function testPlum() {
            $this -> assertEquals("#DDA0DD00", Hex8Color::plum() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::powderBlue
         */
        function testPowderBlue() {
            $this -> assertEquals("#B0E0E600", Hex8Color::powderBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::purple
         */
        function testPurple() {
            $this -> assertEquals("#80008000", Hex8Color::purple() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::rebeccaPurple
         */
        function testRebeccaPurple() {
            $this -> assertEquals("#66339900", Hex8Color::rebeccaPurple() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::red
         */
        function testRed() {
            $this -> assertEquals("#FF000000", Hex8Color::red() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::rosyBrown
         */
        function testRosyBrown() {
            $this -> assertEquals("#BC8F8F00", Hex8Color::rosyBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::royalBlue
         */
        function testRoyalBlue() {
            $this -> assertEquals("#4169E100", Hex8Color::royalBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::saddleBrown
         */
        function testSaddleBrown() {
            $this -> assertEquals("#8B451300", Hex8Color::saddleBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::salmon
         */
        function testSalmon() {
            $this -> assertEquals("#FA807200", Hex8Color::salmon() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::sandyBrown
         */
        function testSandyBrown() {
            $this -> assertEquals("#F4A46000", Hex8Color::sandyBrown() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::seaGreen
         */
        function testSeaGreen() {
            $this -> assertEquals("#2E8B5700", Hex8Color::seaGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::seaShell
         */
        function testSeaShell() {
            $this -> assertEquals("#FFF5EE00", Hex8Color::seaShell() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::sienna
         */
        function testSienna() {
            $this -> assertEquals("#A0522D00", Hex8Color::sienna() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::silver
         */
        function testSilver() {
            $this -> assertEquals("#C0C0C000", Hex8Color::silver() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::skyBlue
         */
        function testSkyBlue() {
            $this -> assertEquals("#87CEEB00", Hex8Color::skyBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::slateBlue
         */
        function testSlateBlue() {
            $this -> assertEquals("#6A5ACD00", Hex8Color::slateBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::slateGray
         */
        function testSlateGray() {
            $this -> assertEquals("#70809000", Hex8Color::slateGray() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::slateGrey
         */
        function testSlateGrey() {
            $this -> assertEquals("#70809000", Hex8Color::slateGrey() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::snow
         */
        function testSnow() {
            $this -> assertEquals("#FFFAFA00", Hex8Color::snow() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::springGreen
         */
        function testSpringGreen() {
            $this -> assertEquals("#00FF7F00", Hex8Color::springGreen() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::steelBlue
         */
        function testSteelBlue() {
            $this -> assertEquals("#4682B400", Hex8Color::steelBlue() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::tan
         */
        function testTan() {
            $this -> assertEquals("#D2B48C00", Hex8Color::tan() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::teal
         */
        function testTeal() {
            $this -> assertEquals("#00808000", Hex8Color::teal() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::thistle
         */
        function testThistle() {
            $this -> assertEquals("#D8BFD800", Hex8Color::thistle() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::tomato
         */
        function testTomato() {
            $this -> assertEquals("#FF634700", Hex8Color::tomato() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::turquoise
         */
        function testTurquoise() {
            $this -> assertEquals("#40E0D000", Hex8Color::turquoise() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::violet
         */
        function testViolet() {
            $this -> assertEquals("#EE82EE00", Hex8Color::violet() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::wheat
         */
        function testWheat() {
            $this -> assertEquals("#F5DEB300", Hex8Color::wheat() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::white
         */
        function testWhite() {
            $this -> assertEquals("#FFFFFF00", Hex8Color::white() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::whiteSmoke
         */
        function testWhiteSmoke() {
            $this -> assertEquals("#F5F5F500", Hex8Color::whiteSmoke() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::yellow
         */
        function testYellow() {
            $this -> assertEquals("#FFFF0000", Hex8Color::yellow() -> getHex());
        }

        /**
         * @covers \Chameleon\Colors\Color::yellowGreen
         */
        function testYellowGreen() {
            $this -> assertEquals("#9ACD3200", Hex8Color::yellowGreen() -> getHex());
        }
    }
?>