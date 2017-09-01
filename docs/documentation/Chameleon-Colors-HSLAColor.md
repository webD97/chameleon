Chameleon\Colors\HSLAColor
===============

Color Class for HSL colors

Represents a color based on the HSL (hue, saturation, value) system


* Class name: HSLAColor
* Namespace: Chameleon\Colors
* Parent class: [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)





Properties
----------


### $alpha

    private integer $alpha

The alpha channel value [0, 127]



* Visibility: **private**


### $hue

    private mixed $hue





* Visibility: **private**


### $saturation

    private mixed $saturation





* Visibility: **private**


### $lightness

    private mixed $lightness





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

    mixed Chameleon\Colors\HSLColor::__construct(integer $hue, \Chameleon\Colors\float $saturation, \Chameleon\Colors\float $lightness)

Class constructor



* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)


#### Arguments
* $hue **integer** - &lt;p&gt;Hue value [0, 359]&lt;/p&gt;
* $saturation **Chameleon\Colors\float**
* $lightness **Chameleon\Colors\float**



### __toString

    mixed Chameleon\Colors\HSLColor::__toString()





* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)




### getAlpha

    integer Chameleon\Colors\HSLAColor::getAlpha()

Get RGB alpha channel value



* Visibility: **public**




### setAlpha

    \Chameleon\Colors\HSLAColor Chameleon\Colors\HSLAColor::setAlpha(integer $alpha)

Set RGB alpha channel value



* Visibility: **public**


#### Arguments
* $alpha **integer** - &lt;p&gt;RGB alpha channel avalue [0, 127]&lt;/p&gt;



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



### getHue

    integer Chameleon\Colors\HSLColor::getHue()

Get hue value

Returns the hue value of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)




### setHue

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setHue(integer $hue)

Set hue value

Sets the hue value of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)


#### Arguments
* $hue **integer** - &lt;p&gt;The hue value [0, 359]&lt;/p&gt;



### getSaturation

    integer Chameleon\Colors\HSLColor::getSaturation()

Get saturation value

Returns the saturation value of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)




### setSaturation

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setSaturation(integer $saturation)

Set saturation value

Sets the saturation value of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)


#### Arguments
* $saturation **integer** - &lt;p&gt;The saturation value [0, 1]&lt;/p&gt;



### getLightness

    float Chameleon\Colors\HSLColor::getLightness()

Get lightness

Returns the lightness of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)




### setLightness

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setLightness(integer $lightness)

Set lightness

Sets the lightness of this color

* Visibility: **public**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)


#### Arguments
* $lightness **integer** - &lt;p&gt;The lightness [0, 1]&lt;/p&gt;



### makeRGB

    mixed Chameleon\Colors\HSLColor::makeRGB()





* Visibility: **private**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)




### hue2rgb

    mixed Chameleon\Colors\HSLColor::hue2rgb($p, $q, $t)





* Visibility: **private**
* This method is defined by [Chameleon\Colors\HSLColor](Chameleon-Colors-HSLColor.md)


#### Arguments
* $p **mixed**
* $q **mixed**
* $t **mixed**



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


