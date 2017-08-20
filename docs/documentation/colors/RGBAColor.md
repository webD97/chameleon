# RGBColor
[&larr; Back to overview](../)

## Description
The RGBAColor class represents a color with alpha channel in the RGB space.

## Quickinfo
- Namespace: `\Chameleon\Colors`
- Since: 0.0.1

## Usage
`use` the RGBAColor class and create a RGB red with 50% transparency:
```php
<?php
    use Chameleon\Colors\RGBAColor;

    $red = new RGBAColor(255, 0, 0, 64);
?>
```

## Methods
### Constructor
    public __construct(int $red, int $green, int $blue, $alpha);

### __toString
    public string __toString();

Returns a string representation of the color, formatted as "rgba(red, green, blue, alpha)"

### getRed
    public int getRed();

Returns the red channel value, somewhere between 0 and 255 inclusively.

### getGreen
    public int getGreen();

Returns the green channel value, somewhere between 0 and 255 inclusively.

### getBlue
    public int getBlue();

Returns the blue channel value, somewhere between 0 and 255 inclusively.

### getAlpha
    public int getAlpha();

Returns the alpha channel value, somewhere between 0 and 127 inclusively.

### setRed
    public int setRed(int $red);

Sets the red channel value to $red. $red must be between 0 and 255 inclusively.

### setGreen
    public int setGreen(int $green);

Sets the green channel value to $green. $green must be between 0 and 255 inclusively.

### setBlue
    public int setBlue(int $blue);
    
Sets the blue channel value to $blue. $blue must be between 0 and 255 inclusively.