<?php

/*strlen(): Returns the length of a string.
strpos(): Searches for a specific substring within a string and returns its position.
substr(): Extracts a portion of a string based on a specified starting position and length.
str_replace(): Replaces all occurrences of a substring with another substring in a string.
strtolower(): Converts a string to lowercase.
strtoupper(): Converts a string to uppercase.
trim(): Removes whitespace or specified characters from the beginning and end of a string.
explode(): Splits a string into an array based on a specified delimiter.
implode(): Joins elements of an array into a string using a specified delimiter.
strrev(): Reverses a string.*/

// ""
$fn = "Nasr Henida elzaanaty";

// strlen()
echo strlen($fn);
echo "<br>";

// strpos()
echo strpos($fn, "Nasr");
echo "<br>";

// strtolower()
echo strtolower($fn);
echo "<br>";

// strtoupper()
echo strtoupper($fn);
echo "<br>";

// trim()
echo trim($fn);
echo "<br>";

// str_replace()
echo str_replace("Nasr", "Boss", $fn);
echo "<br>";

// substr()
echo substr($fn, 0, 5);
echo "<br>";

// implode()
$names = array("Nasr", "Ahmed", "Mohamed");
echo implode(" ", $names);
echo "<br>";

// explode()
$exploded = explode(" ", $fn);
print_r($exploded);
echo "<br>";

// strrev()
echo strrev($fn);
echo "<br>";

// strrchr()
echo strrchr($fn, "a");
echo "<br>";

// strripos()
echo strripos($fn, "a");
echo "<br>";

// strspn()
echo strspn($fn, "Nasr");
echo "<br>";

// strrev()
echo strrev($fn);
echo "<br>";

// strrchr()
echo strrchr($fn, "a");
echo "<br>";

// Str::random()
$length = 10;
echo Str::random($length);
echo "<br>";


?>
