# Chameleon [![Build Status](https://travis-ci.org/webD97/chameleon.svg?branch=master)](https://travis-ci.org/webD97/chameleon) [![Code Climate](https://codeclimate.com/github/webD97/chameleon/badges/gpa.svg)](https://codeclimate.com/github/webD97/chameleon) [![Test Coverage](https://codeclimate.com/github/webD97/chameleon/badges/coverage.svg)](https://codeclimate.com/github/webD97/chameleon/coverage)
Chameleon is a PHP image manipulation library built around GD.

Please note that it is still in development!

## Code example
```php
<?php
    require __DIR__ . "/vendor/autoload.php";

    use Chameleon\Image;
    use Chameleon\Vector2;

    use Chameleon\Colors\HSLColor;
    use Chameleon\Primitives\Rectangle;
    use Chameleon\Patterns\BackgroundColor;

    $image = Image::create(480, 360);

    $imageBackground = new HSLColor(135, 1, 0.3);

    $image -> setBackgroundColor($imageBackground);

    $rectanglePosition = new Vector2(50, 50);
    $rectangleBackground = new HSLColor(45, 1, 0.5);
    $rectangleBorder = new HSLColor(90, 1, 0.8);

    $rectangle = new Rectangle($rectanglePosition, 380, 260);
    $rectangle -> setBackgroundColor(new BackgroundColor($rectangleBackground))
               -> setBorderColor(new BackgroundColor($rectangleBorder))
               -> setBorderThickness(5);

    $image -> draw($rectangle);

    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>
```

## Output
![PHP Output](http://chameleon.webd97.de/img/index/example.png)
