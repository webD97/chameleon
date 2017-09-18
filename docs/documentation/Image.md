# Chameleon\Image
The Image class encapsulates a GD image resource and provides methods for manipulating images.

Images can be created from scratch or read from a file. New images can be initialised with a background color,
which can also be transparent. There are methods for basic image manipulation, like scaling, cropping, merging,
flipping and rotating. Direct pixel manipulation is possible using the getPixel() and setPixel() methods. Image
filtering is possible using the filter() method. Primitives can be drawn onto the image with the draw() method.

* Class name: `Image`
* Namespace: `Chameleon`
* Fully qualified class name: `Chameleon\Image`

## Methods
### create()
    Image Image::create(integer $width, integer $height, IColor|null $backgroundColor)

Create an image from scratch.

The image is initialized with a given size and an optional background color.
* **static**
#### Arguments
* $width **integer** - &lt;p&gt;Image width in px&lt;/p&gt;
* $height **integer** - &lt;p&gt;Image height in px&lt;/p&gt;
* $backgroundColor **IColor|null** - &lt;p&gt;(optional) Background color, defaults to ColorFactory::black()&lt;/p&gt;

---
### fromFile()
    Image Image::fromFile(string $path)

Load an image from a file.


* **static**
#### Arguments
* $path **string** - &lt;p&gt;Path to the file&lt;/p&gt;

---
### getBackgroundColor()
    IColor Image::getBackgroundColor()

Get the background color.

The background color can be set when creating new images. For images read from a file, it is
ColorFactory::black().
#### Arguments
None.

---
### getWidth()
    integer Image::getWidth()

Get image width in px.


#### Arguments
None.

---
### getHeight()
    integer Image::getHeight()

Get image height in px.


#### Arguments
None.

---
### enableAlphaBlending()
    Image Image::enableAlphaBlending()

Enable alpha blending for this image.

If alpha blending is turned on, colors are drawn &quot;on top&quot; of existing ones in this pixel. If the new color
has transparency, the old color and the new color will blend.
If alpha blending is turned off, colors will replace existing ones in this pixel, regardless of any
transparency.
#### Arguments
None.

---
### disableAlphaBlending()
    Image Image::disableAlphaBlending()

Disable alpha blending for this image.

If alpha blending is turned on, colors are drawn &quot;on top&quot; of existing ones in this pixel. If the new color
has transparency, the old color and the new color will blend.
If alpha blending is turned off, colors will replace existing ones in this pixel, regardless of any
transparency.
#### Arguments
None.

---
### outputFile()
    boolean Image::outputFile($type, array $options, string $file)

Output the image to a file.


#### Arguments
* $type **mixed** - &lt;p&gt;int One of the supported IMG_* constants&lt;/p&gt;
* $options **array** - &lt;p&gt;An array of options specific for the desired file format.&lt;/p&gt;
* $file **string** - &lt;p&gt;(optional) Write to a file, defaults to &quot;php://output&quot;.&lt;/p&gt;

---
### getBase64()
    string Image::getBase64($type, array $options)




#### Arguments
* $type **mixed** - &lt;p&gt;int One of the supported IMG_* constants&lt;/p&gt;
* $options **array** - &lt;p&gt;An array of options specific for the desired file format.&lt;/p&gt;

---
### getImageResource()
    resource Image::getImageResource()

Get the underlying GD image resource.


#### Arguments
None.

---
### registerColor()
    integer Image::registerColor(IColor $color)

Register a color with this image.


#### Arguments
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### isColorRegistered()
    boolean Image::isColorRegistered(IColor $color)

Check if a color is registered with this image.


#### Arguments
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### setBackgroundPattern()
    void Image::setBackgroundPattern(IPattern $pattern)

Fill the whole image with the given pattern.

The pattern is drawn on top of everything else. Only call this before drawing other elements onto the image
unless you want them to be affected by the pattern.
#### Arguments
* $pattern **IPattern** - &lt;p&gt;The pattern&lt;/p&gt;

---
### getPixel()
    RGBColor Image::getPixel(integer $xCoordinate, integer $yCoordinate)

Get color of a specific pixel.


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

Flip the image.


#### Arguments
* $flipMode **FlipMode** - &lt;p&gt;FlipMode::HORIZONTAL, FlipMode::VERTICAL or FlipMode::BOTH&lt;/p&gt;

---
### scale()
    Image Image::scale(integer $width, integer $height, boolean $override, ScaleMode|null $mode)

Scale the image.


#### Arguments
* $width **integer** - &lt;p&gt;New width&lt;/p&gt;
* $height **integer** - &lt;p&gt;(optional) New height. If omitted or negative, the aspect ratio will be preserved.&lt;/p&gt;
* $override **boolean** - &lt;p&gt;(optional) If true, the existing image will be overridden, otherwise a new Image will be returned.&lt;/p&gt;
* $mode **ScaleMode|null** - &lt;p&gt;(optional) The desired interpolation algorithm, default: ScaleMode::BICUBIC_FIXED().&lt;/p&gt;

---
### crop()
    Image Image::crop(Vector2 $start, Vector2 $end, boolean $override)

Crop the image to a given box.


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

Draw one or more primitives onto the image.


#### Arguments
* $primitives **IPrimitive&gt;** - &lt;p&gt;Any number of primitives&lt;/p&gt;

---
