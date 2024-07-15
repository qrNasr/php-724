<?php
// ""
echo "<h3>How to check the data types</h3>";
$fn = "Nasr";
$ln = "Alsharif";
$age = 20;
$gender = "male";
$country = "Jordan";
$city = "Amman";
$phone = "0777777777";

$d1 = is_string($fn) ? 'string' : gettype($fn);
echo "The data type of fn is $d1 <br>";

$d2 = is_string($ln) ? 'string' : gettype($ln);
echo "The data type of ln is $d2 <br>";

$d3 = is_int($age) ? 'int' : gettype($age);
echo "The data type of age is $d3 <br>";

$d4 = is_string($gender) ? 'string' : gettype($gender);
echo "The data type of gender is $d4 <br>";

$d5 = is_string($country) ? 'string' : gettype($country);
echo "The data type of country is $d5 <br>";

$d6 = is_string($city) ? 'string' : gettype($city);
echo "The data type of city is $d6 <br>";

$d7 = is_string($phone) ? 'string' : gettype($phone);
echo "The data type of phone is $d7 <br>";

// Rest of the code...

?>
