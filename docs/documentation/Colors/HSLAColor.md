# Chameleon\Colors\HSLAColor
Color Class for HSL colors

Represents a color based on the HSL (hue, saturation, value) system

* Class name: `HSLAColor`
* Namespace: `Chameleon\Colors`
* Fully qualified class name: `Chameleon\Colors\HSLAColor`
* Extends: [Chameleon\Colors\HSLColor](Colors/HSLColor)

## Methods
### __construct()
    void HSLColor::__construct(integer $hue, \Chameleon\Colors\float $saturation, \Chameleon\Colors\float $lightness)

Class constructor


* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $hue **integer** - &lt;p&gt;Hue value [0, 359]&lt;/p&gt;
* $saturation **Chameleon\Colors\float** - *No description available*.
* $lightness **Chameleon\Colors\float** - *No description available*.

---
### fromRGBA()
    HSLColor HSLColor::fromRGBA(RGBAColor $rgba)




* **static**
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $rgba **RGBAColor** - *No description available*.

---
### __toString()
    void HSLColor::__toString()




* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
None.

---
### getAlpha()
    float HSLAColor::getAlpha()

Get RGB alpha channel value


#### Arguments
None.

---
### setAlpha()
    HSLAColor HSLAColor::setAlpha(float $alpha)

Set RGB alpha channel value


#### Arguments
* $alpha **float** - &lt;p&gt;Alpha channel value [0, 1]&lt;/p&gt;

---
### getRGBA()
    void HSLColor::getRGBA()




* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
None.

---
### getHue()
    integer HSLColor::getHue()

Get hue value

Returns the hue value of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
None.

---
### setHue()
    HSLColor HSLColor::setHue(integer $hue)

Set hue value

Sets the hue value of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $hue **integer** - &lt;p&gt;The hue value [0, 359]&lt;/p&gt;

---
### getSaturation()
    float HSLColor::getSaturation()

Get saturation value

Returns the saturation value of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
None.

---
### setSaturation()
    HSLColor HSLColor::setSaturation(float|integer $saturation)

Set saturation value

Sets the saturation value of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $saturation **float|integer** - &lt;p&gt;The saturation value [0, 1]&lt;/p&gt;

---
### getLightness()
    float HSLColor::getLightness()

Get lightness

Returns the lightness of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
None.

---
### setLightness()
    HSLColor HSLColor::setLightness(float|integer $lightness)

Set lightness

Sets the lightness of this color
* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $lightness **float|integer** - &lt;p&gt;The lightness [0, 1]&lt;/p&gt;

---
### lighten()
    void HSLColor::lighten(\Chameleon\Colors\float $percentage)




* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
### darken()
    void HSLColor::darken(\Chameleon\Colors\float $percentage)




* Defined by [Chameleon\Colors\HSLColor](Colors/HSLColor)
#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
