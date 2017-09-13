# Chameleon\Mask
* Class name: `Mask`
* Namespace: `Chameleon`
* Fully qualified class name: `Chameleon\Mask`
* Extends: [SplFixedArray](http://php.net/manual/en/class.splfixedarray.php)

Mask is a two-dimensional array based on SplFixedArray with helper functions
to map (x, y) coordinates to the one-dimensional internal SplFixedArray.
It stores boolean values (and `null`) to store the shapes of a Primitive.
`true` means permeable, `false`/`null` means impermeable.

## Methods
* [__construct()](#__construct)
* [getWidth()](#getwidth)
* [getHeight()](#getheight)
* [getValueAt()](#getvalueat)
* [setValueAt()](#setvalueat)

### __construct()
    Mask::__construct(int $width, int $height)

Instantiate a new Mask.

#### Arguments
* $width **int**
* $height **int**

#### Return value
None.

---

### getWidth()
    int Mask::getWidth()

Get width of Mask.

#### Arguments
None.

#### Return value
* Width in px

---

### getHeight()
    int Mask::getHeight()

Get height of Mask.

#### Arguments
None.

#### Return value
* Height in px

---

### getValueAt()
    mixed Mask::getValueAt(int $x, int $y)

Get value at (x, y) position of this Mask.

#### Arguments
* $x **int** The x coordinate
* $y **int** The y coordinate

### Return value
* **bool** or **null** The value at (x, y). `true` means permeable, `false`/`null` means impermeable.

---

### setValueAt()
    Mask Mask::setValueAt(int $x, int $y, ?bool $value)

Set value at (x, y) position of this mask.

#### Arguments
* $x **int** The x coordinate
* $y **int** The y coordinate
* $value **bool** or **null** The new value. `true` means permeable, `false`/`null` means impermeable.

#### Return value
* self
