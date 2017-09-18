# Chameleon\Colors\IColor


* This is an **interface**
* Interface name: IColor
* Namespace: Chameleon\Colors
* Fully qualified class name: Chameleon\Colors\IColor

## Methods
### fromRGBA()
    void IColor::fromRGBA(\Chameleon\Colors\RGBAColor $color)

Construct from an RGBAColor


* **static**
#### Arguments
* $color **[Chameleon\Colors\RGBAColor](Colors/RGBAColor)** - *No description available*.

---
### getRGBA()
    RGBAColor IColor::getRGBA()

Get the RGBA representation of the color


#### Arguments
None.

---
### getInt()
    integer IColor::getInt()

Return the integer value of this color.


#### Arguments
None.

---
### isTransparent()
    boolean IColor::isTransparent()

Find out if the color is transparent


#### Arguments
None.

---
### lighten()
    IColor IColor::lighten(float $percentage)

Make the color lighter


#### Arguments
* $percentage **float** - *No description available*.

---
### darken()
    IColor IColor::darken(float $percentage)

Make the color darker


#### Arguments
* $percentage **float** - *No description available*.

---
### __toString()
    string IColor::__toString()

Return a string representation of the color.


#### Arguments
None.

---
