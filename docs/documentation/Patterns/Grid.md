# Chameleon\Patterns\Grid
Grid pattern. Can be customized in width, height, x offset and y offset.

* Class name: `Grid`
* Namespace: `Chameleon\Patterns`
* Fully qualified class name: `Chameleon\Patterns\Grid`
* Extends: [Chameleon\Patterns\Pattern](Patterns/Pattern)

## Methods
### __construct()
    void Pattern::__construct(integer $colors)

Pattern constructor.


* Defined by [Chameleon\Patterns\Pattern](Patterns/Pattern)
#### Arguments
* $colors **integer** - &lt;p&gt;Number of colors used in this pattern&lt;/p&gt;

---
### getWidth()
    integer Grid::getWidth()

Get horizontal spacing of lines


#### Arguments
None.

---
### setWidth()
    Grid Grid::setWidth(integer $width)

Set horizontal spacing of lines


#### Arguments
* $width **integer** - &lt;p&gt;Horizontal spacing in px&lt;/p&gt;

---
### getHeight()
    integer Grid::getHeight()

Get vertical spacing of lines


#### Arguments
None.

---
### getOffsetX()
    integer Grid::getOffsetX()

Get x-axis offset


#### Arguments
None.

---
### setOffsetX()
    Grid Grid::setOffsetX(integer $offset)

Set x-axis offset

x-axis offset moves the whole grid to the left/right
#### Arguments
* $offset **integer** - &lt;p&gt;x offset in px&lt;/p&gt;

---
### getOffsetY()
    integer Grid::getOffsetY()

Get y-axis offset


#### Arguments
None.

---
### setOffsetY()
    Grid Grid::setOffsetY(integer $offset)

Set y-axis offset

y-axis offset moves the whole grid up/down
#### Arguments
* $offset **integer** - &lt;p&gt;y offset in px&lt;/p&gt;

---
### getBackgroundColor()
    IColor Grid::getBackgroundColor()

Get background color


#### Arguments
None.

---
### setBackgroundColor()
    void Grid::setBackgroundColor(IColor $color)

Set background color


#### Arguments
* $color **IColor** - *No description available*.

---
### getLineColor()
    IColor Grid::getLineColor()

Get grid line color


#### Arguments
None.

---
### setLineColor()
    void Grid::setLineColor(IColor $color)

Set grid line color


#### Arguments
* $color **IColor** - *No description available*.

---
### getColorAt()
    IColor IPattern::getColorAt(integer $x, integer $y)

Get color in this pattern at the given position


* Defined by [Chameleon\Patterns\IPattern](Patterns/IPattern)
#### Arguments
* $x **integer** - &lt;p&gt;The x coordinate&lt;/p&gt;
* $y **integer** - &lt;p&gt;The y coordinate&lt;/p&gt;

---
