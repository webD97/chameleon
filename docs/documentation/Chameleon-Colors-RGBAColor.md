Chameleon\Colors\RGBAColor
===============






* Class name: RGBAColor
* Namespace: Chameleon\Colors
* Parent class: [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)





Properties
----------


### $alpha

    private integer $alpha

The alpha channel value [0, 127]



* Visibility: **private**


### $red

    protected integer $red

The red channel value [0, 255]



* Visibility: **protected**


### $green

    protected integer $green

The green channel value [0, 255]



* Visibility: **protected**


### $blue

    protected integer $blue

The blue channel value [0, 255]



* Visibility: **protected**


Methods
-------


### __construct

    mixed Chameleon\Colors\RGBColor::__construct(integer $red, integer $green, integer $blue)

Class constructor



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $red **integer** - &lt;p&gt;The red channel value [0, 255]&lt;/p&gt;
* $green **integer** - &lt;p&gt;The green channel value [0, 255]&lt;/p&gt;
* $blue **integer** - &lt;p&gt;The blue channel value [0, 255]&lt;/p&gt;



### __toString

    string Chameleon\Colors\RGBColor::__toString()

Get string representation of this color

Format: rgb(red, green, blue)

* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)




### getAlpha

    integer Chameleon\Colors\RGBAColor::getAlpha()

Get RGB alpha channel value



* Visibility: **public**




### setAlpha

    \Chameleon\Colors\RGBAColor Chameleon\Colors\RGBAColor::setAlpha(integer $alpha)

Set RGB alpha channel value



* Visibility: **public**


#### Arguments
* $alpha **integer** - &lt;p&gt;RGB alpha channel avalue [0, 127]&lt;/p&gt;



### getRGBA

    mixed Chameleon\Colors\RGBColor::getRGBA()





* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)




### fromRGBA

    mixed Chameleon\Colors\RGBColor::fromRGBA(\Chameleon\Colors\RGBAColor $rgba)





* Visibility: **public**
* This method is **static**.
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $rgba **[Chameleon\Colors\RGBAColor](Chameleon-Colors-RGBAColor.md)**



### getRed

    integer Chameleon\Colors\RGBColor::getRed()

Get red channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)




### setRed

    \Chameleon\Colors\RGBColor Chameleon\Colors\RGBColor::setRed(integer $red)

Set the red channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $red **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;



### getGreen

    integer Chameleon\Colors\RGBColor::getGreen()

Get green channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)




### setGreen

    \Chameleon\Colors\RGBColor Chameleon\Colors\RGBColor::setGreen(integer $green)

Set green channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $green **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;



### getBlue

    integer Chameleon\Colors\RGBColor::getBlue()

Get blue channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)




### setBlue

    integer Chameleon\Colors\RGBColor::setBlue(integer $blue)

Set blue channel value



* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $blue **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;



### lighten

    mixed Chameleon\Colors\RGBColor::lighten(\Chameleon\Colors\float $percentage)





* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $percentage **Chameleon\Colors\float**



### darken

    mixed Chameleon\Colors\RGBColor::darken(\Chameleon\Colors\float $percentage)





* Visibility: **public**
* This method is defined by [Chameleon\Colors\RGBColor](Chameleon-Colors-RGBColor.md)


#### Arguments
* $percentage **Chameleon\Colors\float**


