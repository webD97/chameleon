# Chameleon\Filters\GaussianBlurFilter
Class BuiltinFilter enables wrapping of PHP&#039;s builtin image filter functions

* Class name: `GaussianBlurFilter`
* Namespace: `Chameleon\Filters`
* Fully qualified class name: `Chameleon\Filters\GaussianBlurFilter`
* Extends: [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)

## Methods
### __construct()
    void BuiltinFilter::__construct(\Chameleon\Options $options)




* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
* $options **Chameleon\Options** - *No description available*.

---
### getFilterID()
    integer BuiltinFilter::getFilterID()

Get filter ID (IMG_FILTER_*)


* **abstract**
* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
### getArg1()
    integer|null BuiltinFilter::getArg1()

Get $arg1 for imagefilter()


* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
### getArg2()
    integer|null BuiltinFilter::getArg2()

Get $arg2 for imagefilter()


* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
### getArg3()
    integer|null BuiltinFilter::getArg3()

Get $arg3 for imagefilter()


* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
### getArg4()
    integer|null BuiltinFilter::getArg4()

Get $arg4 for imagefilter()


* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
### apply()
    boolean IFilter::apply(Image $image)

Apply the filter to an image.


* Defined by [Chameleon\Filters\IFilter](Filters/IFilter)
#### Arguments
* $image **Image** - &lt;p&gt;The image to be applied to&lt;/p&gt;

---
### getOptions()
    Options BuiltinFilter::getOptions()

Get Options


* Defined by [Chameleon\Filters\BuiltinFilter](Filters/BuiltinFilter)
#### Arguments
None.

---
