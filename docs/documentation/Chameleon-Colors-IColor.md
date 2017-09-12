Chameleon\Colors\IColor
===============






* Interface name: IColor
* Namespace: Chameleon\Colors
* This is an **interface**






Methods
-------


### fromRGBA

    void Chameleon\Colors\IColor::fromRGBA(\Chameleon\Colors\RGBAColor $color)

Construct from an RGBAColor



* Visibility: **public**
* This method is **static**.


#### Arguments
* $color **[Chameleon\Colors\RGBAColor](Chameleon-Colors-RGBAColor.md)**



### getRGBA

    \Chameleon\Colors\RGBAColor Chameleon\Colors\IColor::getRGBA()

Get the RGBA representation of the color



* Visibility: **public**




### isTransparent

    boolean Chameleon\Colors\IColor::isTransparent()

Find out if the color is transparent



* Visibility: **public**




### lighten

    \Chameleon\Colors\IColor Chameleon\Colors\IColor::lighten(float $percentage)

Make the color lighter



* Visibility: **public**


#### Arguments
* $percentage **float**



### darken

    \Chameleon\Colors\IColor Chameleon\Colors\IColor::darken(float $percentage)

Make the color darker



* Visibility: **public**


#### Arguments
* $percentage **float**


