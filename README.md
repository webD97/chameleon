# Chameleon [![Build Status](https://travis-ci.org/webD97/chameleon.svg?branch=master)](https://travis-ci.org/webD97/chameleon)
Chameleon is a PHP image manipulation library built around GD

## Code example
```php
<?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Chameleon\Image;
    use Chameleon\Vector2;
    use Chameleon\Colors\RGBColor;
    use Chameleon\Primitives\Rectangle;
    use Chameleon\Primitives\Ellipse;
    use Chameleon\Primitives\Decorators\Border;
    
    $image = Image::create(512, 512);

    $colorBackground        = new RGBColor(64, 191, 255);
    $colorRectangle         = new RGBColor(32, 128, 64);
    $colorRectangleBorder   = new RGBColor(255, 255, 255);
    $colorEllipse           = new RGBColor(128, 128, 128);
    $colorEllipseBorder     = new RGBColor(255, 0, 255);

    $positionRectangle  = new Vector2(50, 50);
    $positionEllipse    = new Vector2(256, 256);
    
    $image -> setBackgroundColor($colorBackground);
    
    $rect = new Rectangle($positionRectangle, 200, 200);
    $rect -> setBackgroundColor($colorRectangle)
          -> setBorderThickness(5)
          -> setBorderColor($colorRectangleBorder);
        
    $elli = new Ellipse($positionEllipse, 488, 488);
    $elli -> setBackgroundColor($colorEllipse)
          -> setBorderColor($colorEllipseBorder);
    
    $image -> draw($elli);
    $image -> draw($rect);
    
    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>
```

## Output
![PHP Output](http://chameleon.webd97.de/img/index/example.png)
