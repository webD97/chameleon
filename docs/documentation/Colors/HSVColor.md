# Chameleon\Colors\HSVColor
Color Class for HSV colors

Represents a color based on the HSV (hue, saturation, value) system

* Class name: `HSVColor`
* Namespace: `Chameleon\Colors`
* Fully qualified class name: `Chameleon\Colors\HSVColor`
* Extends: Chameleon\Colors\Color

## Methods
### __construct()
    void HSVColor::__construct(integer $hue, \Chameleon\Colors\float $saturation, \Chameleon\Colors\float $value)

Class constructor


#### Arguments
* $hue **integer** - &lt;p&gt;Hue value [0, 359]&lt;/p&gt;
* $saturation **Chameleon\Colors\float** - *No description available*.
* $value **Chameleon\Colors\float** - *No description available*.

---
### fromRGBA()
    void HSVColor::fromRGBA(\Chameleon\Colors\RGBAColor $rgba)




* **static**
#### Arguments
* $rgba **[Chameleon\Colors\RGBAColor](Colors/RGBAColor)** - *No description available*.

---
### __toString()
    void HSVColor::__toString()




#### Arguments
None.

---
### getHue()
    integer HSVColor::getHue()

Get hue value

Returns the hue value of this color
#### Arguments
None.

---
### setHue()
    HSVColor HSVColor::setHue(integer $hue)

Set hue value

Sets the hue value of this color
#### Arguments
* $hue **integer** - &lt;p&gt;The hue value [0, 359]&lt;/p&gt;

---
### getSaturation()
    integer HSVColor::getSaturation()

Get saturation value

Returns the saturation value of this color
#### Arguments
None.

---
### setSaturation()
    HSVColor HSVColor::setSaturation(integer $saturation)

Set saturation value

Sets the saturation value of this color
#### Arguments
* $saturation **integer** - &lt;p&gt;The saturation value [0, 1]&lt;/p&gt;

---
### getValue()
    integer HSVColor::getValue()

Get value

Returns the value of this color
#### Arguments
None.

---
### setValue()
    HSVColor HSVColor::setValue(integer $value)

Set value

Sets the value of this color
#### Arguments
* $value **integer** - &lt;p&gt;The value [0, 1]&lt;/p&gt;

---
### getRGBA()
    void HSVColor::getRGBA()




#### Arguments
None.

---
### lighten()
    void HSVColor::lighten(\Chameleon\Colors\float $percentage)




#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
### darken()
    void HSVColor::darken(\Chameleon\Colors\float $percentage)




#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
