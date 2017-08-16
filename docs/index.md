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
    
    $image = Image::create(512, 512);
    
    $image -> registerColor("blue", new RGBColor(64, 191, 255));
    
    $image -> setBackgroundColor("blue");
    
    $rect = new Rectangle(new Vector2(12, 12), 488, 488);
    $elli = new Ellipse(new Vector2(256, 256), 488, 488);
    
    $image -> draw($rect);
    $image -> draw($elli);
    
    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>
```

## Output
![Code example output](img/index/example.png)