# Chameleon\Primitives\Line


* Class name: `Line`
* Namespace: `Chameleon\Primitives`
* Fully qualified class name: `Chameleon\Primitives\Line`
* Implements: [Chameleon\Primitives\IPrimitive](Primitives/IPrimitive)
## Methods
### __construct()
    void Line::__construct(Vector2 $start, Vector2 $end)

Class constructor


#### Arguments
* $start **Vector2** - &lt;p&gt;Start vector&lt;/p&gt;
* $end **Vector2** - &lt;p&gt;End vector&lt;/p&gt;

---
### getStart()
    Vector2 Line::getStart()

Get start vector


#### Arguments
None.

---
### setStart()
    Line Line::setStart(Vector2 $start)

Set start vector


#### Arguments
* $start **Vector2** - &lt;p&gt;The start vector&lt;/p&gt;

---
### getEnd()
    Vector2 Line::getEnd()

Get end vector


#### Arguments
None.

---
### setEnd()
    Line Line::setEnd(Vector2 $end)

Set end vector


#### Arguments
* $end **Vector2** - &lt;p&gt;The end vector&lt;/p&gt;

---
### getThickness()
    integer Line::getThickness()

Get line thickness in px


#### Arguments
None.

---
### setThickness()
    Line Line::setThickness(integer $thickness)

Set line thickness


#### Arguments
* $thickness **integer** - &lt;p&gt;Thickness in px&lt;/p&gt;

---
### getColor()
    IColor Line::getColor()

Get line color


#### Arguments
None.

---
### setColor()
    Line Line::setColor(IColor $color)

Set line color


#### Arguments
* $color **IColor** - &lt;p&gt;The color&lt;/p&gt;

---
### getPosition()
    Vector2 IPrimitive::getPosition()

Get Primitive position


* Defined by [Chameleon\Primitives\IPrimitive](Primitives/IPrimitive)
#### Arguments
None.

---
### setPosition()
    IPrimitive IPrimitive::setPosition(Vector2 $point)

Set the position of this primitive


* Defined by [Chameleon\Primitives\IPrimitive](Primitives/IPrimitive)
#### Arguments
* $point **Vector2** - &lt;p&gt;The position vector&lt;/p&gt;

---
### draw()
    IPrimitive IPrimitive::draw(Image $image)

Draw this primitive onto the image


* Defined by [Chameleon\Primitives\IPrimitive](Primitives/IPrimitive)
#### Arguments
* $image **Image** - *No description available*.

---
