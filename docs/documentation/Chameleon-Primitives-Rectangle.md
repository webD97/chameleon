Chameleon\Primitives\Rectangle
===============

Rectangle, by default completely transparent




* Class name: Rectangle
* Namespace: Chameleon\Primitives
* Parent class: Chameleon\Primitives\Primitive





Properties
----------


### $width

    private mixed $width





* Visibility: **private**


### $height

    private mixed $height





* Visibility: **private**


Methods
-------


### __construct

    mixed Chameleon\Primitives\Rectangle::__construct(\Chameleon\Vector2 $point, integer $width, integer $height)

Class constructor



* Visibility: **public**


#### Arguments
* $point **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;Top left start point&lt;/p&gt;
* $width **integer** - &lt;p&gt;width in px&lt;/p&gt;
* $height **integer** - &lt;p&gt;height in px&lt;/p&gt;



### getWidth

    integer Chameleon\Primitives\Rectangle::getWidth()

Get width in px



* Visibility: **public**




### setWidth

    void Chameleon\Primitives\Rectangle::setWidth(integer $width)

Set width in px



* Visibility: **public**


#### Arguments
* $width **integer**



### getHeight

    integer Chameleon\Primitives\Rectangle::getHeight()

Get height in px



* Visibility: **public**




### setHeight

    void Chameleon\Primitives\Rectangle::setHeight(integer $height)

Set height in px



* Visibility: **public**


#### Arguments
* $height **integer**



### drawPattern

    mixed Chameleon\Primitives\Rectangle::drawPattern(\Chameleon\Image $image, \Chameleon\Patterns\IPattern $pattern, \Chameleon\Mask $mask, \Chameleon\Primitives\int $startX, \Chameleon\Primitives\int $startY)





* Visibility: **private**


#### Arguments
* $image **Chameleon\Image**
* $pattern **[Chameleon\Patterns\IPattern](Chameleon-Patterns-IPattern.md)**
* $mask **Chameleon\Mask**
* $startX **Chameleon\Primitives\int**
* $startY **Chameleon\Primitives\int**



### draw

    \Chameleon\Primitives\Rectangle Chameleon\Primitives\Rectangle::draw(\Chameleon\Image $image)

Draw the rectangle onto the image resource

Draws the rectangle with border and background (if set).
By default, a rectangle has a 1px black border and no background

* Visibility: **public**


#### Arguments
* $image **Chameleon\Image**


