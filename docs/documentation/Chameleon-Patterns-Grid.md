Chameleon\Patterns\Grid
===============

Grid pattern. Can be customized in width, height, x ofset and y offset.




* Class name: Grid
* Namespace: Chameleon\Patterns
* Parent class: [Chameleon\Patterns\Pattern](Chameleon-Patterns-Pattern.md)





Properties
----------


### $width

    private mixed $width





* Visibility: **private**


### $height

    private mixed $height





* Visibility: **private**


### $offsetX

    private mixed $offsetX





* Visibility: **private**


### $offsetY

    private mixed $offsetY





* Visibility: **private**


Methods
-------


### __construct

    mixed Chameleon\Patterns\Pattern::__construct(\Chameleon\Patterns\int $colors)





* Visibility: **public**
* This method is defined by [Chameleon\Patterns\Pattern](Chameleon-Patterns-Pattern.md)


#### Arguments
* $colors **Chameleon\Patterns\int**



### getWidth

    integer Chameleon\Patterns\Grid::getWidth()

Get horizontal spacing of lines



* Visibility: **public**




### setWidth

    \Chameleon\Patterns\Grid Chameleon\Patterns\Grid::setWidth(integer $width)

Set horizontal spacing of lines



* Visibility: **public**


#### Arguments
* $width **integer** - &lt;p&gt;Horizontal spacing in px&lt;/p&gt;



### getHeight

    integer Chameleon\Patterns\Grid::getHeight()

Get vertical spacing of lines



* Visibility: **public**




### setHeight

    \Chameleon\Patterns\Grid Chameleon\Patterns\Grid::setHeight(\Chameleon\Patterns\int $height)

Set veritcal spacing of lines



* Visibility: **public**


#### Arguments
* $height **Chameleon\Patterns\int**



### getOffsetX

    integer Chameleon\Patterns\Grid::getOffsetX()

Get x-axis offset



* Visibility: **public**




### setOffsetX

    \Chameleon\Patterns\Grid Chameleon\Patterns\Grid::setOffsetX(\Chameleon\Patterns\int $offset)

Set x-axis offset

x-axis offset moves the whole grid to the left/right

* Visibility: **public**


#### Arguments
* $offset **Chameleon\Patterns\int**



### getOffsetY

    integer Chameleon\Patterns\Grid::getOffsetY()

Get y-axis offset



* Visibility: **public**




### setOffsetY

    \Chameleon\Patterns\Grid Chameleon\Patterns\Grid::setOffsetY(\Chameleon\Patterns\int $offset)

Set y-axis offset

y-axis offset moves the whole grid up/down

* Visibility: **public**


#### Arguments
* $offset **Chameleon\Patterns\int**



### getBackgroundColor

    \Chameleon\Colors\IColor Chameleon\Patterns\Grid::getBackgroundColor()

Get background color



* Visibility: **public**




### setBackgroundColor

    void Chameleon\Patterns\Grid::setBackgroundColor(\Chameleon\Colors\IColor $color)

Set background color



* Visibility: **public**


#### Arguments
* $color **[Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)**



### getLineColor

    \Chameleon\Colors\IColor Chameleon\Patterns\Grid::getLineColor()

Get grid line color



* Visibility: **public**




### setLineColor

    void Chameleon\Patterns\Grid::setLineColor(\Chameleon\Colors\IColor $color)

Set grid line color



* Visibility: **public**


#### Arguments
* $color **[Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)**



### getColorAt

    mixed Chameleon\Patterns\IPattern::getColorAt(\Chameleon\Patterns\int $x, \Chameleon\Patterns\int $y)





* Visibility: **public**
* This method is defined by [Chameleon\Patterns\IPattern](Chameleon-Patterns-IPattern.md)


#### Arguments
* $x **Chameleon\Patterns\int**
* $y **Chameleon\Patterns\int**



### setColor

    mixed Chameleon\Patterns\Pattern::setColor(\Chameleon\Patterns\int $index, \Chameleon\Colors\IColor $color)





* Visibility: **protected**
* This method is defined by [Chameleon\Patterns\Pattern](Chameleon-Patterns-Pattern.md)


#### Arguments
* $index **Chameleon\Patterns\int**
* $color **[Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)**



### getColor

    mixed Chameleon\Patterns\Pattern::getColor(\Chameleon\Patterns\int $index)





* Visibility: **protected**
* This method is defined by [Chameleon\Patterns\Pattern](Chameleon-Patterns-Pattern.md)


#### Arguments
* $index **Chameleon\Patterns\int**


