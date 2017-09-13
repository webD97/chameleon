# Chameleon\Colors\RGBColor


* Class name: `RGBColor`
* Namespace: `Chameleon\Colors`
* Fully qualified class name: `Chameleon\Colors\RGBColor`
* Extends: Chameleon\Colors\Color

## Methods
### __construct()
    void RGBColor::__construct(integer $red, integer $green, integer $blue)

Class constructor


#### Arguments
* $red **integer** - &lt;p&gt;The red channel value [0, 255]&lt;/p&gt;
* $green **integer** - &lt;p&gt;The green channel value [0, 255]&lt;/p&gt;
* $blue **integer** - &lt;p&gt;The blue channel value [0, 255]&lt;/p&gt;

---
### __toString()
    string RGBColor::__toString()

Get string representation of this color

Format: rgb(red, green, blue)
#### Arguments
None.

---
### getRed()
    integer RGBColor::getRed()

Get red channel value


#### Arguments
None.

---
### setRed()
    RGBColor RGBColor::setRed(integer $red)

Set the red channel value


#### Arguments
* $red **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getGreen()
    integer RGBColor::getGreen()

Get green channel value


#### Arguments
None.

---
### setGreen()
    RGBColor RGBColor::setGreen(integer $green)

Set green channel value


#### Arguments
* $green **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getBlue()
    integer RGBColor::getBlue()

Get blue channel value


#### Arguments
None.

---
### setBlue()
    RGBColor RGBColor::setBlue(integer $blue)

Set blue channel value


#### Arguments
* $blue **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getRGBA()
    void RGBColor::getRGBA()




#### Arguments
None.

---
### fromRGBA()
    void RGBColor::fromRGBA(\Chameleon\Colors\RGBAColor $rgba)




* **static**
#### Arguments
* $rgba **[Chameleon\Colors\RGBAColor](Colors/RGBAColor)** - *No description available*.

---
### lighten()
    void RGBColor::lighten(\Chameleon\Colors\float $percentage)




#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
### darken()
    void RGBColor::darken(\Chameleon\Colors\float $percentage)




#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
