<?php

$name = "John";
$age = 25;
$height = 1.75;

printf("My name is %s, I am %d years old, and my height is %.2f meters.", $name, $age, $height);
echo "br";
$brand = "Apple";
$price = 999.99;

printf("Product: %-10s Price: $%8.2f", $brand, $price);
echo "br";
$number = 42;

printf("Decimal: %d, Hexadecimal: %x, Octal: %o, Binary: %b", $number, $number, $number, $number);
echo "br";
$date = date("Y-m-d");
$time = date("H:i:s");

printf("Today is %s and the current time is %s", $date, $time);
echo "br";
$text = "This is a \t tab character and this is a \n new line.";

printf("Text: %s", $text);
echo "br";

?>
