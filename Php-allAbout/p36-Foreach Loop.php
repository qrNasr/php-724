<?php
/*The foreach construct in PHP is specially meant for iterating over arrays. If you try to use it on a variable with a different data type, PHP raises an error.
The foreach loop in PHP can be used with indexed array as well as associative array. There are two types of usage syntaxes available −
foreach (array as $value) {
   statements
}

foreach (array as $key => $value) {
   statements
}
*/?>

<?php
//Loop with an Indexed Array
$colors = array("Red", "Green", "White", "Black");
foreach ($colors as $ck) {
    echo "$ck \n";
    }
echo 'end of colors';
echo "\n";
echo "\n";
   $arr = array(10, 20, 30, 40, 50);
   foreach ($arr as $val) {
      echo "$val \n";
   }
?>

<?php
$arr = array(10, 20, 30, 40, 50);

foreach ($arr as $val) {
   $index = array_search($val, $arr);
   echo "Element at index $index is $val \n";
}
?>


<?php

/*The second variation of foreach syntax unpacks each element in the array into two variables: one for the key and one for value.

Since the index itself acts as the key in case of an indexed array, the $k variable successively takes the incrementing index of each element in the array.*/
   $arr = array(10, 20, 30, 40, 50);
   foreach ($arr as $k=>$v) {
      echo "Key: $k => Val: $v \n";
   }
?>


<?php

/*An associative array is a collection of key-value pairs. To iterate through an associative array, the second variation of foreach syntax is suitable. Each element in the array is unpacked in two variables each taking up the value of key and its value.*/
   $capitals = array(
      "Maharashtra"=>"Mumbai", "Telangana"=>"Hyderabad",
      "UP"=>"Lucknow", "Tamilnadu"=>"Chennai"
   );

   foreach ($capitals as $k=>$v) {
      echo "Capital of $k is $v \n";
   }
?>


<?php
/*Iterating a 2D Array using "foreach" Loop
It is possible to declare a multi-dimensional array in PHP, wherein each element in an array is another array itself. Note that both the outer array as well as the sub-arry may be an indexed array or an associative array.

In the example below, we have a two-dimensional array, which can be called as an array or arrays. We need nested loops to traverse the nested array structure as follows −*/
   $twoD = array(
      array(1,2,3,4),
      array("one", "two", "three", "four"),
      array("one"=>1, "two"=>2, "three"=>3)
   );

   foreach ($twoD as $idx=>$arr) {
      echo "Array no $idx \n";
      foreach ($arr as $k=>$v) {
         echo "$k => $v" . "\n";
      }
      echo "\n";
   }
?>