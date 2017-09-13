# Chameleon\Image
* Class name: `Image`
* Namespace: `Chameleon`
* Fully qualified class name: `Chameleon\Image`

The image class represents an image. It encapsulates a GD image resource and provides many helper funtions to create, read, manipulate and output the image.

## Methods
* [create()](#create)
* [fromFile()](#fromfile)
* [getWidth()](#getwidth)
* [getHeight()](#getheight)
* [getImageResource()](#getimageresource)
* [as()](#as)
* [registerColor()](#registercolor)
* [isColorRegistered()](#iscolorregistered)
* [getRegisteredColor()](#getregisteredcolor)
* [setBackgroundPattern()](#setbackgroundpattern)
* [getPixel()](#getpixel)
* [setPixel()](#setpixel)
* [draw()](#draw)

### create()
#### Summary
    Image Image::create(int $width, int $height)

This method is **static**. It instantiates a new image with the given dimensions.

#### Arguments
* $width **int** The image width in px
* $height **int** The image height in px

#### Return value
* **Image** instance

---

### fromFile()
#### Summary
    Image Image::fromFile(string $path)

This method is **static**. It loads an existing image file from the given path. By now, it supports PNG, GIF and JPEG files. If the file does not exist, an [Exception](http://php.net/manual/en/class.exception.php) is thrown.

#### Arguments
* $path **string** Path to an existing image file (PNG, GIF or JPEG)

#### Return value
* **Image** instance

---

### getWidth()
#### Summary
    int Image::getWidth()

Get the image width.

#### Arguments
None.

#### Return value
* **int** Image width in px

---

### getHeight()
#### Summary
    int Image::getHeight()

Get the image height.

#### Arguments
None.

#### Return value
* **int** Image height in px

---

### getImageResource()
#### Summary
    resource Image::getImageResource()

Get the underlying GD image resource. Useful when using GD features that are not yet implemented in Chameleon.

#### Arguments
None.

#### Return value
* **resource** A GD image resource

---

### as()
#### Summary
    bool Image::as(int $type)

Output the raw image stream.

#### Arguments
* $type **int** `IMG_PNG`, `IMG_GIF` or `IMG_JPG`

#### Return value
* **bool** Returns `true` on success or `false` on failure.

---

### registerColor()
#### Summary
    int Image::registerColor(IColor $color)

Register a color with this image. All colors are registered with an alpha channel, regardless whether they need it or not.

#### Arguments
* $color **[IColor](./Colors/Icolor)** A color

#### Return value
* **int** Returns the internal color id or `-1` on failure

---

### isColorRegistered()
#### Summary
    bool Image::isColorRegistered(IColor $color)

Find out if the given color is registered with this image.

#### Arguments
* $color **[IColor](./Colors/Icolor)** A color

#### Return value
* **bool** `true` if the color is registered with this image

---

### getRegisteredColor()
#### Summary
    int Image::getRegisteredColor(IColor $color)

Get the internal id of the color for use with PHP's imge*() functions.

#### Arguments
* $color **[IColor](./Colors/Icolor)** A color

#### Return value
* **int** Returns the internal color id

#### Throws
* **[ColorNotFoundException](./Exceptions/ColorNotFoundException)** If color is not registered with this image

---

### setBackgroundPattern()
#### Summary
    Image Image::setBackgroundPattern(IPattern $pattern)

Fill the whole image with the given pattern. Only call this before drawing other elements onto the image unless you want them to be affected by the pattern.

#### Arguments
* $pattern **[IPattern](./Pattern/IPattern)** A pattern

#### Return value
* **Image** self

---

### getPixel()
#### Summary
    RGBColor Image::getPixel(int $x, int $y)

Get the color at the given (x, y) position.

#### Arguments
* $x **int** The x coordinate
* $y **int** The y coordinate

#### Return value
* **[RGBColor](./Colors/RGBColor)** The color at this position

---

### setPixel()
#### Summary
    Image Image::setPixel(int $x, int $y, IColor $color)

Draw the color onto the given (x, y) position. Make sure that the color is registered on the image! No additional tests will be performed!

#### Arguments
* $x **int** The x coordinate
* $y **int** The y coordinate
* $color **[IColor](./Colors/Icolor)** A color

#### Return value
* **Image** self

---

### draw()
#### Summary
    Image Image::draw(IPrimitive ...$primitives)

Draw the primitives onto the image.

#### Arguments
* $primitives **[IPrimitive](./Primitives/IPrimitive)** Any number of Primitives

#### Return value
* **Image** self

---
