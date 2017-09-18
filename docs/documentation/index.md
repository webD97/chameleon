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
    * Chameleon\Filters
        * [SelectiveBlurFilter](Filters/SelectiveBlurFilter)
        * [MeanRemovalFilter](Filters/MeanRemovalFilter)
        * [BrightnessFilter](Filters/BrightnessFilter)
        * [EdgedetectFilter](Filters/EdgedetectFilter)
        * [EmbossFilter](Filters/EmbossFilter)
        * [IFilter](Filters/IFilter)
        * [SmoothFilter](Filters/SmoothFilter)
        * [GrayscaleFilter](Filters/GrayscaleFilter)
        * [GaussianBlurFilter](Filters/GaussianBlurFilter)
        * [ColorizeFilter](Filters/ColorizeFilter)
        * [InvertFilter](Filters/InvertFilter)
        * [ContrastFilter](Filters/ContrastFilter)
        * [BuiltinFilter](Filters/BuiltinFilter)
        * [PixelateFilter](Filters/PixelateFilter)
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
        * [Line](Primitives/Line)
        * [Rectangle](Primitives/Rectangle)
        * [IPrimitive](Primitives/IPrimitive)
    * Chameleon\Transformations
        * [ScaleMode](Transformations/ScaleMode)
        * [FlipMode](Transformations/FlipMode)
        * [RotateMode](Transformations/RotateMode)
    * [ColorFactory](ColorFactory)
    * [Image](Image)


## Class hierarchy diagram
**Warning**: Due to a bug in phpdocumentor, the diagram is incorrect!
![Class hierarchy diagram](./classes.svg)
*generated using [phpdocumentor](http://phpdoc.org/)*
