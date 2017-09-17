# Chameleon\Image
Image class

* Class name: `Image`
* Namespace: `Chameleon`
* Fully qualified class name: `Chameleon\Image`

## Methods
### create()
    Image Image::create(integer $width, integer $height)

Create an image from scratch


* **static**
#### Arguments
* $width **integer** - &lt;p&gt;width in px&lt;/p&gt;
* $height **integer** - &lt;p&gt;height in px&lt;/p&gt;

---
### fromFile()
    Image Image::fromFile(string $path)

Load an image from a file


* **static**
#### Arguments
* $path **string** - &lt;p&gt;Path to the file&lt;/p&gt;

---
### __destruct()
    void Image::__destruct()




#### Arguments
None.

---
### getWidth()
    integer Image::getWidth()

Get image width in px


#### Arguments
None.

---
### getHeight()
    integer Image::getHeight()

Get image height in px


#### Arguments
None.

---
### outputAs()
    boolean Image::outputAs($type)

Output image


#### Arguments
* $type **mixed** - &lt;p&gt;int One of the supported IMG_* constants&lt;/p&gt;

---
### getImageResource()
    resource Image::getImageResource()

Get the underlying GD image resource


#### Arguments
None.

---
### registerColor()
    integer Image::registerColor(IColor $color)

Register a color with this image


#### Arguments
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### isColorRegistered()
    boolean Image::isColorRegistered(IColor $color)

Check if a color is registered with this image


#### Arguments
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### getRegisteredColor()
    integer Image::getRegisteredColor(IColor $color)

Get the underlying GD color


#### Arguments
* $color **IColor** - &lt;p&gt;The high level color&lt;/p&gt;

---
### registerColorIfUnknown()
    boolean Image::registerColorIfUnknown(IColor $color)

Register a color only if it has not been registered yet


#### Arguments
* $color **IColor** - *No description available*.

---
### setBackgroundPattern()
    void Image::setBackgroundPattern(IPattern $pattern)

Fill the whole image with the given pattern.

Only call this before drawing other elements onto the image unless you want them to be affected
by the pattern.
#### Arguments
* $pattern **IPattern** - &lt;p&gt;The pattern&lt;/p&gt;

---
### getPixel()
    RGBColor Image::getPixel(integer $xCoordinate, integer $yCoordinate)

Get color of a specific pixel


#### Arguments
* $xCoordinate **integer** - &lt;p&gt;X coordinate&lt;/p&gt;
* $yCoordinate **integer** - &lt;p&gt;Y coordinate&lt;/p&gt;

---
### setPixel()
    Image Image::setPixel(integer $xCoordinate, integer $yCoordinate, IColor $color)

Set the color of a specific pixel.

Make sure that the color is registered on the image! No additional tests will be performed!
#### Arguments
* $xCoordinate **integer** - &lt;p&gt;The x coordinate&lt;/p&gt;
* $yCoordinate **integer** - &lt;p&gt;The y coordinate&lt;/p&gt;
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### filter()
    Image Image::filter(IFilter $filter)

Apply a filter to the image.


#### Arguments
* $filter **IFilter** - &lt;p&gt;The filter to be applied&lt;/p&gt;

---
### flip()
    Image Image::flip(FlipMode $flipMode)

Flip the image


#### Arguments
* $flipMode **FlipMode** - &lt;p&gt;FlipMode::HORIZONTAL, FlipMode::VERTICAL or FlipMode::BOTH&lt;/p&gt;

---
### scale()
    Image Image::scale(integer $width, integer $height, boolean $override, ScaleMode|null $mode)

Scale the image


#### Arguments
* $width **integer** - &lt;p&gt;New width&lt;/p&gt;
* $height **integer** - &lt;p&gt;(optional) New height. If omitted or negative, the aspect ratio will be preserved.&lt;/p&gt;
* $override **boolean** - &lt;p&gt;(optional) If true, the existing image will be overridden, otherwise a new Image will be returned.&lt;/p&gt;
* $mode **ScaleMode|null** - &lt;p&gt;(optional) The desired interpolation algorithm, default: ScaleMode::BICUBIC_FIXED().&lt;/p&gt;

---
### crop()
    Image Image::crop(Vector2 $start, Vector2 $end, boolean $override)

Crop the image to a given box


#### Arguments
* $start **Vector2** - &lt;p&gt;The top left start position.&lt;/p&gt;
* $end **Vector2** - &lt;p&gt;The bottom right end position.&lt;/p&gt;
* $override **boolean** - &lt;p&gt;(optional) If true, the existing image will be overridden, otherwise a new Image will be returned.&lt;/p&gt;

---
### rotate()
    Image Image::rotate(integer $degrees, RotateMode|null $rotateMode, IColor|null $backgroundColor, boolean $override)

Rotate the image.


#### Arguments
* $degrees **integer** - &lt;p&gt;Degrees [0, 360]&lt;/p&gt;
* $rotateMode **RotateMode|null** - &lt;p&gt;(optional) Rotation orientation, defaults to RotateMode::CLOCKWISE()&lt;/p&gt;
* $backgroundColor **IColor|null** - &lt;p&gt;(optional) The background color for areas that are not covered by the image, defaults to ColorFactory::black()&lt;/p&gt;
* $override **boolean** - &lt;p&gt;(optional) If true, the existing image will be overridden, otherwise a new Image will be returned.&lt;/p&gt;

---
### draw()
    Image Image::draw(IPrimitive&gt; $primitives)

Draw one or more primitives onto the image


#### Arguments
* $primitives **IPrimitive&gt;** - &lt;p&gt;Any number of primitives&lt;/p&gt;

---
