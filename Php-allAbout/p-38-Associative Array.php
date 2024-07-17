<?php
/*How to Declare an Associative Array in PHP?
Both the approaches of declaring an array – the array() function and the square bracket notation – can be used.

$arr1 = array(
   "Maharashtra"=>"Mumbai",
   "Telangana"=>"Hyderabad",
   "UP"=>"Lucknow",
   "Tamilnadu"=>"Chennai"
);

$arr2 = ["Maharashtra"=>"Mumbai",
   "Telangana"=>"Hyderabad",
   "UP"=>"Lucknow",
   "Tamilnadu"=>"Chennai"];
If we call the var_dump() function, both the above arrays will show the similar structure −

array(4) {
   ["Maharashtra"]=>
   string(6) "Mumbai"
   ["Telangana"]=>
   string(9) "Hyderabad
   ["UP"]=>
   string(7) "Lucknow"
   ["Tamilnadu"]=>
   string(7) "Chennai"
}
   The key part of each element in an associative array can be any number (integer, float or Boolean), or a string. The value part can be of any type. However, the float key is cast to an integer. So, a Boolean true/false is used as "1" or "0" as the key.
*/
?>

<?php
   $arr1 = array(
      10=>"hello",
      5.75=>"world",
      -5=>"foo",
      false=>"bar"
   );
   var_dump($arr1);
?>

<?php
//Iterating a PHP Associative Array
   $capitals = array(
      "Maharashtra"=>"Mumbai",
      "Telangana"=>"Hyderabad",
      "UP"=>"Lucknow",
      "Tamilnadu"=>"Chennai"
   );

   foreach ($capitals as $k=>$v) {
      echo "Capital of $k is $v \n";
   }
?>

<?php
/*There is another way of using the foreach loop in PHP, where each element is stored in a variable. We can then separate the key and value parts using array_search() and use them in the loop body.*/
$capitals = array(
   "Maharashtra"=>"Mumbai",
   "Telangana"=>"Hyderabad",
   "UP"=>"Lucknow",
   "Tamilnadu"=>"Chennai"
);

foreach ($capitals as $pair) {
   $cap = array_search($pair, $capitals);
   echo "Capital of $cap is $capitals[$cap] \n";
}
?>


<?php
   $capitals = array(
      "Maharashtra"=>"Mumbai",
      "Telangana"=>"Hyderabad",
      "UP"=>"Lucknow",
      "Tamilnadu"=>"Chennai"
   );
   $keys=array_keys($capitals);

   for ($i=0; $i<count($keys); $i++){
      $cap = $keys[$i];
      echo "Capital of $cap is $capitals[$cap] \n";
   }
?>

<?php
/*Accessing the Value with its Key
In an associative array, the key is the identifier of value instead of index. Hence, to fetch value associated with a certain key, use $arr[key] syntax. The same can be used to update the value of a certain key.

Example
In the following code, an associative array $arr1 is declared. Another array $arr2 is created such that it stores each pair from $arr1 with the value of each key being doubled.*/
   $arr1 = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
   foreach ($arr1 as $k=>$v){
      $arr2[$k] = $v*2;
   }
   print_r($arr2);
?>