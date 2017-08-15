<?php
    require_once("src/Image.php");
    require_once("src/Color.php");
    require_once("src/Vector2.php");
    require_once("src/Primitives/Rectangle.php");
    require_once("src/Primitives/Ellipse.php");

    use Primitives\Rectangle;
    use Primitives\Ellipse;

    $image = Image::create(512, 512);

    $image -> registerColor("orange", Color::fromRGB(255, 128, 64));
    $image -> registerColor("blue", Color::fromRGB(64, 191, 255));

    $rect = new Rectangle(new Vector2(12, 12), 488, 488);
    $elli = new Ellipse(new Vector2(256, 256), 488, 488);

    $image -> setBackgroundColor("blue");
    $image -> draw($rect);
    $image -> draw($elli);

    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>