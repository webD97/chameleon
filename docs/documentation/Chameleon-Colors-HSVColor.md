Chameleon\Colors\HSVColor
===============

Color Class for HSV colors

Represents a color based on the HSV (hue, saturation, value) system


* Class name: HSVColor
* Namespace: Chameleon\Colors
* Parent class: [Chameleon\Colors\Color](Chameleon-Colors-Color.md)





Properties
----------


### $hue

    private mixed $hue





* Visibility: **private**


### $saturation

    private mixed $saturation





* Visibility: **private**


### $value

    private mixed $value





* Visibility: **private**


### $red

    protected mixed $red





* Visibility: **protected**


### $green

    protected mixed $green





* Visibility: **protected**


### $blue

    protected mixed $blue





* Visibility: **protected**


Methods
-------


### __construct

    mixed Chameleon\Colors\HSVColor::__construct(integer $hue, \Chameleon\Colors\float $saturation, \Chameleon\Colors\float $value)

Class constructor



* Visibility: **public**


#### Arguments
* $hue **integer** - &lt;p&gt;Hue value [0, 359]&lt;/p&gt;
* $saturation **Chameleon\Colors\float**
* $value **Chameleon\Colors\float**



### __toString

    mixed Chameleon\Colors\HSVColor::__toString()





* Visibility: **public**




### getHue

    integer Chameleon\Colors\HSVColor::getHue()

Get hue value

Returns the hue value of this color

* Visibility: **public**




### setHue

    \Chameleon\Colors\HSVColor Chameleon\Colors\HSVColor::setHue(integer $hue)

Set hue value

Sets the hue value of this color

* Visibility: **public**


#### Arguments
* $hue **integer** - &lt;p&gt;The hue value [0, 359]&lt;/p&gt;



### getSaturation

    integer Chameleon\Colors\HSVColor::getSaturation()

Get saturation value

Returns the saturation value of this color

* Visibility: **public**




### setSaturation

    \Chameleon\Colors\HSVColor Chameleon\Colors\HSVColor::setSaturation(integer $saturation)

Set saturation value

Sets the saturation value of this color

* Visibility: **public**


#### Arguments
* $saturation **integer** - &lt;p&gt;The saturation value [0, 1]&lt;/p&gt;



### getValue

    integer Chameleon\Colors\HSVColor::getValue()

Get value

Returns the value of this color

* Visibility: **public**




### setValue

    \Chameleon\Colors\HSVColor Chameleon\Colors\HSVColor::setValue(integer $value)

Set value

Sets the value of this color

* Visibility: **public**


#### Arguments
* $value **integer** - &lt;p&gt;The value [0, 1]&lt;/p&gt;



### setRGB

    mixed Chameleon\Colors\HSVColor::setRGB(integer $red, $green, $blue)

Set RGB equivalent



* Visibility: **private**


#### Arguments
* $red **integer** - &lt;p&gt;Red value [0, 255]&lt;/p&gt;
* $green **mixed**
* $blue **mixed**



### makeRGB

    mixed Chameleon\Colors\HSVColor::makeRGB()





* Visibility: **private**




### getRGBA

    \Chameleon\Colors\RGBAColor Chameleon\Colors\IColor::getRGBA()

Get the RGBA representation of the color



* Visibility: **public**
* This method is defined by [Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)




### fromRGBA

    void Chameleon\Colors\IColor::fromRGBA(\Chameleon\Colors\RGBAColor $color)

Construct from an RGBAColor



* Visibility: **public**
* This method is **static**.
* This method is defined by [Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)


#### Arguments
* $color **[Chameleon\Colors\RGBAColor](Chameleon-Colors-RGBAColor.md)**



### isTransparent

    boolean Chameleon\Colors\IColor::isTransparent()

Find out if the color is transparent



* Visibility: **public**
* This method is defined by [Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)




### checkRange

    void Chameleon\Colors\Color::checkRange($value, $min, $max)

Check if a value is in a legal range



* Visibility: **protected**
* This method is defined by [Chameleon\Colors\Color](Chameleon-Colors-Color.md)


#### Arguments
* $value **mixed**
* $min **mixed**
* $max **mixed**


