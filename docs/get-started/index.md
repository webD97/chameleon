# Get started
## 1. Install 
Choose one of the [installation methods](../install). We recommend using *Composer*.

## 2. Set up your script
Create a new PHP file and require composer's autoloader:
```php
File: MyFirstChameleonImage.php

<?php
    require __DIR__ . "/vendor/autoload.php";
?>
```

## 3. Create a fresh image
Chameleon's image components are organized in the *Chameleon* namespace. Be sure to `use` the components you need.

```php
File: MyFirstChameleonImage.php

<?php
    require __DIR__ . "/vendor/autoload.php";

    use Chameleon\Image;

    $image = Image::create(480, 360);
?>
```

## 4. Compose your image
Create the components you like to use and set their properties. We will set a [BackgroundColor](./documentation/Patterns/BackgroundColor) of hsl(135, 1, 0.3) for the image and create a 380x260px [Rectangle](./documentation/Primitives/Rectangle) with [HSL(45, 1, 0.5)](./documentation/Colors/HSLColor) as `BackgroundColor` and a 5px border with `HSL(90, 1, 0.8)` as `BackgroundColor`. This `Rectangle` will then be drawn onto the image.

```php
File: MyFirstChameleonImage.php

<?php
    require __DIR__ . "/vendor/autoload.php";

    use Chameleon\Image;
    use Chameleon\Vector2;

    use Chameleon\Patterns\BackgroundColor;
    use Chameleon\Colors\HSLColor;
    use Chameleon\Primitives\Rectangle;

    $image = Image::create(480, 360);

    $imageBackground = new HSLColor(135, 1, 0.3);

    $image -> setBackgroundPattern(new BackgroundColor($imageBackground));

    $rectanglePosition = new Vector2(50, 50);
    $rectangleBackground = new HSLColor(45, 1, 0.5);
    $rectangleBorder = new HSLColor(90, 1, 0.8);

    $rectangle = new Rectangle($rectanglePosition, 380, 260);
    $rectangle -> setBackgroundPattern(new BackgroundColor($rectangleBackground))
               -> setBorderPattern(new BackgroundColor($rectangleBorder))
               -> setBorderThickness(5);

    $image -> draw($rectangle);
?>
```

## 5. Output your image
You can output your image directly to the browser with just two lines of code.

```php
File: MyFirstChameleonImage.php

<?php
    (...)

    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>

```
---
That's it. Navigate your browser to MyFirstChameleonImage.php and take at look at your creation!

![Chameleon example image](../img/index/example.png)

## Where to go next?
Take a look at the [documentation](../documentation).
