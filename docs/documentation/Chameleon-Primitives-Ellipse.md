Chameleon\Primitives\Ellipse
===============






* Class name: Ellipse
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

    mixed Chameleon\Primitives\Ellipse::__construct(\Chameleon\Vector2 $point, integer $width, integer $height)

Class constructor



* Visibility: **public**


#### Arguments
* $point **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;Center point&lt;/p&gt;
* $width **integer** - &lt;p&gt;width in px&lt;/p&gt;
* $height **integer** - &lt;p&gt;height in px&lt;/p&gt;



### getWidth

    integer Chameleon\Primitives\Ellipse::getWidth()

Get width in px



* Visibility: **public**




### setWidth

    \Chameleon\Primitives\Ellipse Chameleon\Primitives\Ellipse::setWidth(integer $width)

Set width in px



* Visibility: **public**


#### Arguments
* $width **integer**



### getHeight

    integer Chameleon\Primitives\Ellipse::getHeight()

Get height in px



* Visibility: **public**




### setHeight

    \Chameleon\Primitives\Ellipse Chameleon\Primitives\Ellipse::setHeight(integer $height)

Set height in px



* Visibility: **public**


#### Arguments
* $height **integer**



### draw

    \Chameleon\Primitives\Ellipse Chameleon\Primitives\Ellipse::draw(\Chameleon\Image $image)

Draw the ellipse onto the image resource

Draws the ellipse with border and background (if set).
By default, an ellipse has a 1px black border and no background

* Visibility: **public**


#### Arguments
* $image **Chameleon\Image**


