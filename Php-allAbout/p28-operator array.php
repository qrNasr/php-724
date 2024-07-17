<?php
// PHP defines the following set of symbols to be used as operators on array data types −

// Symbol	Example	Name	Result
// +	$a + $b	Union	Union of $a and $b.
// ==	$a == $b	Equality	TRUE if $a and $b have the same key/value pairs.
// ===	$a === $b	Identity	TRUE if $a and $b have the same key/value pairs in the same order and of the same types.
// !=	$a != $b	Inequality	TRUE if $a is not equal to $b.
// <>	$a <> $b	Inequality	TRUE if $a is not equal to $b.
// !==	$a !== $b	Non identity	TRUE if $a is not identical to $b.
// The Union operator appends the right-hand array appended to left-hand array. If a key exists in both arrays, the elements from the left-hand array will be used, and the matching elements from the right-hand array will be ignored.

?>

<?php
//The following example shows how you can use the union operator in PHP −
   $arr1=array("phy"=>70, "che"=>80, "math"=>90);
   $arr2=array("Eng"=>70, "Bio"=>80,"CompSci"=>90);
   $arr3=$arr1+$arr2;
   var_dump($arr3);
?>


<?php

//check if 2 arrays are fully identicall.
$arr1=array(0=>70, 1=>80, 2=>90);
$arr2=array(70,90,80);
var_dump ($arr1===$arr2);
$arr3=[70,80,90];
var_dump ($arr3===$arr1);
?>