Chameleon\Primitives\Line
===============






* Class name: Line
* Namespace: Chameleon\Primitives
* This class implements: [Chameleon\Primitives\IPrimitive](Chameleon-Primitives-IPrimitive.md)




Properties
----------


### $start

    private mixed $start





* Visibility: **private**


### $end

    private mixed $end





* Visibility: **private**


### $color

    private mixed $color





* Visibility: **private**


### $thickness

    private mixed $thickness





* Visibility: **private**


Methods
-------


### __construct

    mixed Chameleon\Primitives\Line::__construct(\Chameleon\Vector2 $start, \Chameleon\Vector2 $end)

Class constructor



* Visibility: **public**


#### Arguments
* $start **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;Start vector&lt;/p&gt;
* $end **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;End vector&lt;/p&gt;



### getStart

    \Chameleon\Vector2 Chameleon\Primitives\Line::getStart()

Get start vector



* Visibility: **public**




### setStart

    \Chameleon\Primitives\Line Chameleon\Primitives\Line::setStart(\Chameleon\Vector2 $start)

Set start vector



* Visibility: **public**


#### Arguments
* $start **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;The start vector&lt;/p&gt;



### getEnd

    \Chameleon\Vector2 Chameleon\Primitives\Line::getEnd()

Get end vector



* Visibility: **public**




### setEnd

    \Chameleon\Primitives\Line Chameleon\Primitives\Line::setEnd(\Chameleon\Vector2 $end)

Set end vector



* Visibility: **public**


#### Arguments
* $end **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;The end vector&lt;/p&gt;



### getThickness

    integer Chameleon\Primitives\Line::getThickness()

Get line thickness in px



* Visibility: **public**




### setThickness

    \Chameleon\Primitives\Line Chameleon\Primitives\Line::setThickness(integer $thickness)

Set line thickness



* Visibility: **public**


#### Arguments
* $thickness **integer** - &lt;p&gt;Thickness in px&lt;/p&gt;



### getColor

    \Chameleon\Colors\IColor Chameleon\Primitives\Line::getColor()

Get line color



* Visibility: **public**




### setColor

    \Chameleon\Primitives\Line Chameleon\Primitives\Line::setColor(\Chameleon\Colors\IColor $color)

Set line color



* Visibility: **public**


#### Arguments
* $color **[Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)** - &lt;p&gt;The color&lt;/p&gt;



### getPosition

    \Chameleon\Vector2 Chameleon\Primitives\IPrimitive::getPosition()

Get Primitive position



* Visibility: **public**
* This method is defined by [Chameleon\Primitives\IPrimitive](Chameleon-Primitives-IPrimitive.md)




### setPosition

    \Chameleon\Primitives\IPrimitive Chameleon\Primitives\IPrimitive::setPosition(\Chameleon\Vector2 $point)

Set the position of this primitive



* Visibility: **public**
* This method is defined by [Chameleon\Primitives\IPrimitive](Chameleon-Primitives-IPrimitive.md)


#### Arguments
* $point **[Chameleon\Vector2](Chameleon-Vector2.md)** - &lt;p&gt;The position vector&lt;/p&gt;



### draw

    \Chameleon\Primitives\IPrimitive Chameleon\Primitives\IPrimitive::draw(\Chameleon\Image $image)

Draw this primitive onto the image



* Visibility: **public**
* This method is defined by [Chameleon\Primitives\IPrimitive](Chameleon-Primitives-IPrimitive.md)


#### Arguments
* $image **Chameleon\Image**


