<?php

$lt = 12.4;
$typ = gettype($lt);
echo "The data type of $lt is $typ <br>";

$bl = true;
$typ2 = gettype($bl);
echo "The data type of $bl is $typ2 <br>";

$str = "Hello, World!";
$typ3 = gettype($str);
echo "The data type of $str is $typ3 <br>";

$arr = [1, 2, 3];
$typ4 = gettype($arr);
echo "The data type of the array is $typ4 <br>";

$obj = new stdClass();
$typ5 = gettype($obj);
echo "The data type of the object is $typ5 <br>";

$null = null;
$typ6 = gettype($null);
echo "The data type of $null is $typ6 <br>";

// Rest of the code...


?>
