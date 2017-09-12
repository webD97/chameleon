Chameleon\Colors\HSLColor
===============

Color Class for HSL colors

Represents a color based on the HSL (hue, saturation, value) system


* Class name: HSLColor
* Namespace: Chameleon\Colors
* Parent class: Chameleon\Colors\Color





Properties
----------


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


#### Arguments
* $hue **integer** - &lt;p&gt;Hue value [0, 359]&lt;/p&gt;
* $saturation **Chameleon\Colors\float**
* $lightness **Chameleon\Colors\float**



### fromRGBA

    mixed Chameleon\Colors\HSLColor::fromRGBA(\Chameleon\Colors\RGBAColor $rgba)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $rgba **[Chameleon\Colors\RGBAColor](Chameleon-Colors-RGBAColor.md)**



### __toString

    mixed Chameleon\Colors\HSLColor::__toString()





* Visibility: **public**




### getHue

    integer Chameleon\Colors\HSLColor::getHue()

Get hue value

Returns the hue value of this color

* Visibility: **public**




### setHue

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setHue(integer $hue)

Set hue value

Sets the hue value of this color

* Visibility: **public**


#### Arguments
* $hue **integer** - &lt;p&gt;The hue value [0, 359]&lt;/p&gt;



### getSaturation

    integer Chameleon\Colors\HSLColor::getSaturation()

Get saturation value

Returns the saturation value of this color

* Visibility: **public**




### setSaturation

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setSaturation(integer $saturation)

Set saturation value

Sets the saturation value of this color

* Visibility: **public**


#### Arguments
* $saturation **integer** - &lt;p&gt;The saturation value [0, 1]&lt;/p&gt;



### getLightness

    float Chameleon\Colors\HSLColor::getLightness()

Get lightness

Returns the lightness of this color

* Visibility: **public**




### setLightness

    \Chameleon\Colors\HSLColor Chameleon\Colors\HSLColor::setLightness(integer $lightness)

Set lightness

Sets the lightness of this color

* Visibility: **public**


#### Arguments
* $lightness **integer** - &lt;p&gt;The lightness [0, 1]&lt;/p&gt;



### makeRGB

    mixed Chameleon\Colors\HSLColor::makeRGB()





* Visibility: **private**




### hue2rgb

    mixed Chameleon\Colors\HSLColor::hue2rgb($p, $q, $t)





* Visibility: **private**


#### Arguments
* $p **mixed**
* $q **mixed**
* $t **mixed**



### getRGBA

    mixed Chameleon\Colors\HSLColor::getRGBA()





* Visibility: **public**




### lighten

    mixed Chameleon\Colors\HSLColor::lighten(\Chameleon\Colors\float $percentage)





* Visibility: **public**


#### Arguments
* $percentage **Chameleon\Colors\float**



### darken

    mixed Chameleon\Colors\HSLColor::darken(\Chameleon\Colors\float $percentage)





* Visibility: **public**


#### Arguments
* $percentage **Chameleon\Colors\float**


