Chameleon\Colors\Color
===============






* Class name: Color
* Namespace: Chameleon\Colors
* This is an **abstract** class
* This class implements: [Chameleon\Colors\IColor](Chameleon-Colors-IColor.md)






Methods
-------


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


#### Arguments
* $value **mixed**
* $min **mixed**
* $max **mixed**


