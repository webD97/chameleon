# Chameleon\Primitives\Rectangle
Rectangle, by default completely transparent

* Class name: `Rectangle`
* Namespace: `Chameleon\Primitives`
* Fully qualified class name: `Chameleon\Primitives\Rectangle`
* Extends: Chameleon\Primitives\Primitive

## Methods
### __construct()
    void Rectangle::__construct(Vector2 $point, integer $width, integer $height)

Class constructor


#### Arguments
* $point **Vector2** - &lt;p&gt;Top left start point&lt;/p&gt;
* $width **integer** - &lt;p&gt;width in px&lt;/p&gt;
* $height **integer** - &lt;p&gt;height in px&lt;/p&gt;

---
### getWidth()
    integer Rectangle::getWidth()

Get width in px


#### Arguments
None.

---
### setWidth()
    Rectangle Rectangle::setWidth(integer $width)

Set width in px


#### Arguments
* $width **integer** - *No description available*.

---
### getHeight()
    integer Rectangle::getHeight()

Get height in px


#### Arguments
None.

---
### setHeight()
    Rectangle Rectangle::setHeight(integer $height)

Set height in px


#### Arguments
* $height **integer** - *No description available*.

---
### draw()
    Rectangle Rectangle::draw(Image $image)

Draw the rectangle onto the image resource

Draws the rectangle with border and background (if set).
By default, a rectangle has a 1px black border and no background
#### Arguments
* $image **Image** - *No description available*.

---
