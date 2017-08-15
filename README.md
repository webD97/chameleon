# Chameleon [![Build Status](https://travis-ci.org/webD97/chameleon.svg?branch=master)](https://travis-ci.org/webD97/chameleon)
Chameleon is a PHP image manipulation library built around GD

## Code example
```php
require __DIR__ . "/vendor/autoload.php";

$image = Image::create(512, 512);

$image -> registerColor("blue", new HSVColor(200, 0.75, 1));

$image -> setBackgroundColor("blue");

$rect = new Rectangle(new Vector2(12, 12), 488, 488);
$elli = new Ellipse(new Vector2(256, 256), 488, 488);

$image -> draw($rect);
$image -> draw($elli);

header("Content-type: image/png");
$image -> as(IMG_PNG);
```

## Output
![PHP Output](http://chameleon.webd97.de/index.php)
