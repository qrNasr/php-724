<?php

echo sin(deg2rad(90)); // outputs 1
echo cos(deg2rad(90)); // outputs 6.1232339957368E-17 (approximately 0)
echo tan(deg2rad(45)); // outputs 0.99999999999999 (approximately 1)
echo asin(1); // outputs 1.5707963267949 (approximately PI / 2)
echo acos(0); // outputs 1.5707963267949 (approximately PI / 2)
echo atan(1); // outputs 0.78539816339745 (approximately PI / 4)
echo atan2(1, 1); // outputs 0.78539816339745 (approximately PI / 4)
echo exp(1); // outputs 2.718281828459 (approximately e)
echo log(100); // outputs 4.6051701859881
echo log10(100); // outputs 2
echo pow(2, 3); // outputs 8
echo sqrt(4); // outputs 2
// echo cbrt(8); // outputs 2
echo hypot(3, 4); // outputs 5
echo fmod(10, 3); // outputs 1
// echo fmin(5, 3); // outputs 3

// echo fmax(5, 3); // outputs 5

/*In PHP, the `Math` class is not a built-in class, but rather a set of functions that can be used to perform mathematical operations. These functions are part of the PHP core and do not need to be instantiated or extended.

Here are some examples of how to use the `Math` class:

**Basic Operations**

* `abs()`: returns the absolute value of a number
```
echo abs(-5); // outputs 5
```
* `ceil()`: returns the ceiling of a number
```
echo ceil(3.7); // outputs 4
```
* `floor()`: returns the floor of a number
```
echo floor(3.7); // outputs 3
```
* `round()`: returns the rounded value of a number
```
echo round(3.7); // outputs 4
```
* `rand()`: generates a random number
```
echo rand(1, 10); // outputs a random number between 1 and 10
```
**Trigonometric Functions**

* `sin()`: returns the sine of a number
```
echo sin(PI / 2); // outputs 1
```
* `cos()`: returns the cosine of a number
```
echo cos(PI / 2); // outputs 0
```
* `tan()`: returns the tangent of a number
```
echo tan(PI / 4); // outputs 1
```
* `asin()`: returns the arcsine of a number
```
echo asin(1); // outputs PI / 2
```
* `acos()`: returns the arccosine of a number
```
echo acos(0); // outputs PI / 2
```
* `atan()`: returns the arctangent of a number
```
echo atan(1); // outputs PI / 4
```
* `atan2()`: returns the arctangent of two numbers
```
echo atan2(1, 1); // outputs PI / 4
```
**Exponential and Logarithmic Functions**

* `exp()`: returns the exponential of a number
```
echo exp(1); // outputs e
```
* `log()`: returns the natural logarithm of a number
```
echo log(100); // outputs 4.60517018598808
```
* `log10()`: returns the base-10 logarithm of a number
```
echo log10(100); // outputs 2
```
* `pow()`: returns the value of a number raised to a power
```
echo pow(2, 3); // outputs 8
```
* `sqrt()`: returns the square root of a number
```
echo sqrt(4); // outputs 2
```
* `cbrt()`: returns the cube root of a number
```
echo cbrt(8); // outputs 2
```
* `hypot()`: returns the hypotenuse of a right-angled triangle
```
echo hypot(3, 4); // outputs 5
```
* `fmod()`: returns the remainder of a division operation
```
echo fmod(10, 3); // outputs 1
```
* `fmin()`: returns the minimum of two numbers
```
echo fmin(5, 3); // outputs 3
```
* `fmax()`: returns the maximum of two numbers
```
echo fmax(5, 3); // outputs 5
```
Note that these functions are not part of a `Math` class, but rather are standalone functions that can be used in your PHP code.*/

?>
