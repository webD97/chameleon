# Chameleon
Chameleon is a PHP image manipulation library built around GD.

Please note that Chameleon is still in development. Everything you see is subject to change. Existing features might be changed or removed without notice.

## Installation
### Composer
Chameleon is available on packagist.org as webd97/chameleon:

    composer require webd97/chameleon

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
![Code example output](img/index/example.png)