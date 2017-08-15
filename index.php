<?php
    require_once("src/Image.php");
    require_once("src/Color.php");

    $image = Image::create(512, 512);
    $image -> registerColor("orange", Color::fromRGB(255, 128, 64));
    $image -> registerColor("blue", Color::fromRGB(64, 191, 255));

    $image -> setBackgroundColor("blue");

    header("Content-type: image/png");
    $image -> as(IMG_PNG);
?>