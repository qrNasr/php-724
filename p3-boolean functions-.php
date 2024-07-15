<?php

$lt = 12.4;
$typ = is_float($lt) ? 'float' : gettype($lt);
echo "The data type of $lt is $typ <br>";

$bl = true;
$typ2 = is_bool($bl) ? 'bool' : gettype($bl);
echo "The data type of $bl is $typ2 <br>";

$str = "Hello, World!";
$typ3 = is_string($str) ? 'string' : gettype($str);
echo "The data type of $str is $typ3 <br>";

$arr = [1, 2, 3];
$typ4 = is_array($arr) ? 'array' : gettype($arr);
echo "The data type of the array is $typ4 <br>";

$obj = new stdClass();
$typ5 = is_object($obj) ? 'object' : gettype($obj);
echo "The data type of the object is $typ5 <br>";

$null = null;
$typ6 = is_null($null) ? 'null' : gettype($null);
echo "The data type of $null is $typ6 <br>";



?>
