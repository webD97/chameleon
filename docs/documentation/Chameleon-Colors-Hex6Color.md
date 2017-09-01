Chameleon\Colors\Hex6Color
===============






* Class name: Hex6Color
* Namespace: Chameleon\Colors
* Parent class: [Chameleon\Colors\Color](Chameleon-Colors-Color.md)





Properties
----------


### $red

    protected integer $red

The red channel value [0, 255]



* Visibility: **protected**


### $green

    protected integer $green

The green channel value [0, 255]



* Visibility: **protected**


### $blue

    protected integer $blue

The blue channel value [0, 255]



* Visibility: **protected**


Methods
-------


### __construct

    mixed Chameleon\Colors\Hex6Color::__construct(string $hexstring)

Class constructor



* Visibility: **public**


#### Arguments
* $hexstring **string** - &lt;p&gt;The 6-digit hexstring, e.g. #fe0da7&lt;/p&gt;



### __toString

    string Chameleon\Colors\Hex6Color::__toString()

Get string representation of this color

Format: #rrggbb

* Visibility: **public**




### getHex

    string Chameleon\Colors\Hex6Color::getHex()

Get hexadecimal value for this color
Format: #rrggbb



* Visibility: **public**




### setHex

    void Chameleon\Colors\Hex6Color::setHex(string $hexstring)

Set hexadecimal value for this color



* Visibility: **public**


#### Arguments
* $hexstring **string** - &lt;p&gt;The hexadecimal color value, Fomat: #rrggbb&lt;/p&gt;



### getRed

    integer Chameleon\Colors\Hex6Color::getRed()

Get RGB red channel



* Visibility: **public**




### setRed

    \Chameleon\Colors\Hex6Color Chameleon\Colors\Hex6Color::setRed(integer $red)

Set RGB red channel



* Visibility: **public**


#### Arguments
* $red **integer** - &lt;p&gt;The value [0x00, 0xFF]&lt;/p&gt;



### getGreen

    integer Chameleon\Colors\Hex6Color::getGreen()

Get RGB green channel



* Visibility: **public**




### setGreen

    \Chameleon\Colors\Hex6Color Chameleon\Colors\Hex6Color::setGreen(integer $green)

Set RGB green channel



* Visibility: **public**


#### Arguments
* $green **integer** - &lt;p&gt;The value [0x00, 0xFF]&lt;/p&gt;



### getBlue

    integer Chameleon\Colors\Hex6Color::getBlue()

Get RGB blue channel



* Visibility: **public**




### setBlue

    \Chameleon\Colors\Hex6Color Chameleon\Colors\Hex6Color::setBlue(integer $blue)

Set RGB blue channel



* Visibility: **public**


#### Arguments
* $blue **integer** - &lt;p&gt;The value [0x00, 0xFF]&lt;/p&gt;



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


