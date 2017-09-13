# Chameleon\Colors\Hex6Color


* Class name: `Hex6Color`
* Namespace: `Chameleon\Colors`
* Fully qualified class name: `Chameleon\Colors\Hex6Color`
* Extends: [Chameleon\Colors\RGBColor](Colors/RGBColor)

## Methods
### __construct()
    void RGBColor::__construct(integer $red, integer $green, integer $blue)

Class constructor


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $red **integer** - &lt;p&gt;The red channel value [0, 255]&lt;/p&gt;
* $green **integer** - &lt;p&gt;The green channel value [0, 255]&lt;/p&gt;
* $blue **integer** - &lt;p&gt;The blue channel value [0, 255]&lt;/p&gt;

---
### __toString()
    string RGBColor::__toString()

Get string representation of this color

Format: rgb(red, green, blue)
* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
None.

---
### getHex()
    string Hex6Color::getHex()

Get hexadecimal value for this color
Format: #rrggbb


#### Arguments
None.

---
### setHex()
    void Hex6Color::setHex(string $hexstring)

Set hexadecimal value for this color


#### Arguments
* $hexstring **string** - &lt;p&gt;The hexadecimal color value, Fomat: #rrggbb&lt;/p&gt;

---
### fromRGBA()
    void RGBColor::fromRGBA(\Chameleon\Colors\RGBAColor $rgba)




* **static**
* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $rgba **[Chameleon\Colors\RGBAColor](Colors/RGBAColor)** - *No description available*.

---
### getRed()
    integer RGBColor::getRed()

Get red channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
None.

---
### setRed()
    RGBColor RGBColor::setRed(integer $red)

Set the red channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $red **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getGreen()
    integer RGBColor::getGreen()

Get green channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
None.

---
### setGreen()
    RGBColor RGBColor::setGreen(integer $green)

Set green channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $green **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getBlue()
    integer RGBColor::getBlue()

Get blue channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
None.

---
### setBlue()
    RGBColor RGBColor::setBlue(integer $blue)

Set blue channel value


* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $blue **integer** - &lt;p&gt;The value [0, 255]&lt;/p&gt;

---
### getRGBA()
    void RGBColor::getRGBA()




* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
None.

---
### lighten()
    void RGBColor::lighten(\Chameleon\Colors\float $percentage)




* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
### darken()
    void RGBColor::darken(\Chameleon\Colors\float $percentage)




* Defined by [Chameleon\Colors\RGBColor](Colors/RGBColor)
#### Arguments
* $percentage **Chameleon\Colors\float** - *No description available*.

---
