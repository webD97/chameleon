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


## Class hierarchy diagram
![Class hierarchy diagram](../img/documentation/src.png)