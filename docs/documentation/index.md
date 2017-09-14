# Documentation
The various classes of Chameleon are organsised in the global `Chameleon` namespace.
Logically related classes are grouped in sub-namespaces. Be sure to `use` the classes before
you work with them:

```php
<?php
    require_once("vendor/autoload.php");

    use Chameleon\Image;

    $image = Image::create(480, 360);

    // ...
?>
```

## Namespace Hierarchy
**Warning**: Due to a bug in phpdocumentor, the documentation is incomplete (missing classes)!

* Chameleon
    * Chameleon\Colors
        * [HSLColor](Colors/HSLColor)
        * [RGBColor](Colors/RGBColor)
        * [Hex6Color](Colors/Hex6Color)
        * [Hex8Color](Colors/Hex8Color)
        * [RGBAColor](Colors/RGBAColor)
        * [IColor](Colors/IColor)
        * [HSVColor](Colors/HSVColor)
        * [HSLAColor](Colors/HSLAColor)
    * Chameleon\Patterns
        * [IPattern](Patterns/IPattern)
        * [Pattern](Patterns/Pattern)
        * [BackgroundColor](Patterns/BackgroundColor)
        * [RGBNoise](Patterns/RGBNoise)
        * [Grid](Patterns/Grid)
    * [Vector2](Vector2)
    * Chameleon\Exceptions
        * [ColorNotFoundException](Exceptions/ColorNotFoundException)
        * [ValueOutOfBoundsException](Exceptions/ValueOutOfBoundsException)
    * Chameleon\Primitives
        * [Ellipse](Primitives/Ellipse)
        * [Line](Primitives/Line)
        * [Rectangle](Primitives/Rectangle)
        * [IPrimitive](Primitives/IPrimitive)
    * [ColorFactory](ColorFactory)
    * [Image](Image)
    * Chameleon\Filters
        * [EmbossFilter](Filters/EmbossFilter)
        * [InvertFilter](Filters/InvertFilter)
        * [GrayscaleFilter](Filters/GrayscaleFilter)
        * [MeanRemovalFilter](Filters/MeanRemovalFilter)
        * [BrightnessFilter](Filters/BrightnessFilter)
        * [ColorizeFilter](Filters/ColorizeFilter)
        * [SelectiveBlurFilter](Filters/SelectiveBlurFilter)
        * [SmoothFilter](Filters/SmoothFilter)
        * [GaussianBlurFilter](Filters/GaussianBlurFilter)
        * [IFilter](Filters/IFilter)
        * [EdgedetectFilter](Filters/EdgedetectFilter)
        * [ContrastFilter](Filters/ContrastFilter)
        * [BuiltinFilter](Filters/BuiltinFilter)
        * [PixelateFilter](Filters/PixelateFilter)


## Class hierarchy diagram
**Warning**: Due to a bug in phpdocumentor, the diagram is incorrect!
![Class hierarchy diagram](./classes.svg)
*generated using [phpdocumentor](http://phpdoc.org/)*
