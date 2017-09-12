# Chameleon\Vector2
* Class name: Vector2
* Namespace: Chameleon

The Vector2 class represents a vector in a two-dimensional cartesian coordinate system.
It contains multiple methods to set and manipulate its coordinates.

## Methods
* [__construct()](#__construct)
* [getX()](#getx)
* [getY()](#gety)
* [setX()](#setx)
* [setY()](#sety)
* [incX()](#incx)
* [incY()](#incy)
* [decX()](#decx)
* [decY()](#decy)
* [__tostring()](#__tostring)

### __construct()
#### Summary
    Vector2::__construct(int $x, int $y)

Instantiate a new 2D Vector.

#### Arguments
* $x **int** The X coordinate
* $y **int** The Y coordinate

#### Return value
None.

---

### getX()
#### Summary
    int Vector2::getX()

Get the X coordinate of the vector.

#### Arguments
None.

#### Return Value
* **int** The X coordinate

---

### getY()
#### Summary
    int Vector2::getY()

Get the Y coordinate of the vector.

#### Arguments
None.

#### Return Value
* **int** The Y coordinate

---

### setX()
#### Summary
    Vector2 Vector2::setX(int $x)

Set the vector's X coordinate

#### Arguments
* $x **int** The X coordinate

#### Return value
* **Vector2** self

---

### setY()
#### Summary
    Vector2 Vector2::setY(int $y)

Set the vector's Y coordinate

#### Arguments
* $y **int** The Y coordinate

#### Return value
* **Vector2** self

### incX()
#### Summary
    Vector2 Vector2::incX([int $inc = 1])

Increment the vector's x coordinate by $inc.

#### Arguments
* $inc **int** Defaults to 1

#### Return value
* **Vector2** self

---

### incY()
#### Summary
    Vector2 Vector2::incY([int $inc = 1])

Increment the vector's y coordinate by $inc.

#### Arguments
* $inc **int** Defaults to 1

#### Return value
* **Vector2** self

---

### decX()
    Vector2 Vector2::decX(int $dec)

Decrement the vector's x coordinate by $dec.

#### Arguments
* $dec **int** Defaults to 1

#### Return value
* **Vector2** self

---

### decY()
    Vector2 Vector2::decY(int $dec)

Decrement the vector's y coordinate by $dec.

#### Arguments
* $dec **int** Defaults to 1

#### Return value
* **Vector2** self

---

### __toString()
    string Chameleon\Vector2::__toString()

Returns a string representation of the vector.

#### Arguments
None.

#### Return value
* A string formatted as `(x, y)`


