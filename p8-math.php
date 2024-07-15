<?php

// Absolute value
$num = -5;
$absValue = abs($num);
echo "Absolute value of $num is $absValue<br>";

// Square root
$num = 16;
$sqrtValue = sqrt($num);
echo "Square root of $num is $sqrtValue<br>";

// Power
$base = 2;
$exponent = 3;
$powerValue = pow($base, $exponent);
echo "$base raised to the power of $exponent is $powerValue<br>";

// Random number
$randomNumber = rand(1, 10);
echo "Random number between 1 and 10: $randomNumber<br>";

// Minimum and maximum
$num1 = 5;
$num2 = 10;
$minValue = min($num1, $num2);
$maxValue = max($num1, $num2);
echo "Minimum value between $num1 and $num2 is $minValue<br>";
echo "Maximum value between $num1 and $num2 is $maxValue<br>";

/*

abs(): Returns the absolute value of a number.
sqrt(): Returns the square root of a number.
pow(): Raises a number to a power.
rand(): Generates a random number.
min(): Returns the minimum value among a set of numbers.
max(): Returns the maximum value among a set of numbers.
round(): Rounds a number to the nearest integer.
ceil(): Rounds a number up to the nearest integer.
floor(): Rounds a number down to the nearest integer.
sin(), cos(), tan(): Trigonometric functions.
log(): Returns the natural logarithm of a number.
exp(): Returns the exponential value of a number.

*/

?>
