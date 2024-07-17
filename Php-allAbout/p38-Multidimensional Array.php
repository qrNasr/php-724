<?php
/*A multidimensional array is an array of arrays. In a PHP array, each element can be another array. If the array consists of values or key-value pairs with values being of singular scalar types, it is a one-dimensional array. If each element in an array is an array of one or more scalar values, it is a two-dimensional array.

A PHP array may be a two-dimensional associative array also, where each element of the outer array is key-value pair, the value being another associative array.

*/
# one dimensional indexed array
$arr = [10, 20, 30, 40];

# one dimensional associative array
$arr = ["key1"=> "val1", "key2" => "val2", "key3" => "val3"];

# two dimensional indexed array
$arr = [
   [1,2,3,4],
   [10, 20, 30, 40],
   [100, 200, 300, 400]
];

# two dimensional associative array
$arr = [
   "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
   "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
   "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
];
?>

<?php
   $tbl = [
      [1,2,3,4],
      [10, 20, 30, 40],
      [100, 200, 300, 400]
   ];
   echo ("\n");
   foreach ($tbl as $row){
      foreach ($row as $elem){
         $val = sprintf("%5d", $elem);
         echo $val;
      }
      echo "\n";
?>