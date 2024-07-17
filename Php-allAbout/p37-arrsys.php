<?php
/*Each value in the parenthesis may be either a singular value (it may be a number, string, any object or even another array), or a key-value pair. The association between the key and its value is denoted by the "=>" symbol.*/
$arr1 = array(10, "asd", 1.55, true);
$arr2 = array("one"=>1, "two"=>2, "three"=>3);
$arr3 = array(
   array(10, 20, 30),
   array("Ten", "Twenty", "Thirty"),
   array("physics"=>70, "chemistry"=>80, "maths"=>90)
);

?>


<?php
/*Using Square Brackets [ ]
Instead of the array() function, the comma-separated array elements may also be put inside the square brackets to declare an array object. In this case too, the elements may be singular values or a string or another array.*/
/**/
/**/
/**/
/**/
$arr1 = [10, "asd", 1.55, true];
$arr2 = ["one"=>1, "two"=>2, "three"=>3];
$arr3 = [ [10, 20, 30],
   ["Ten", "Twenty", "Thirty"],
   ["physics"=>70, "chemistry"=>80, "maths"=>90] ];
?>

<?php
//multi-dimensional index array, where each value in an array is another array.
$arr1 = [
   [10, 20, 30],
   ["Ten", "Twenty", "Thirty"],
   [1.1, 2.2, 3.3]
];

var_dump($arr1);
?>

<?php

  //Accessing the Array Elements
//To access any element from a given array, you can use the array[key] syntax.
  $arr1 = [10, 20, 30];
   $arr2 = array("one"=>1, "two"=>2, "three"=>3);

   var_dump($arr1[1]);
   var_dump($arr2["two"]);
?>

<?php
//indexed array
$arr1 = array("a", 10, 9.99, true);
$arr2 = ["a", 10, 9.99, true];

?>

<?php
//Traversing an Indexed Array in PHP
   $numbers = array(10, 20, 30, 40, 50);

   for ($i=0; $i<count($numbers); $i++){
      echo "numbers[$i] = $numbers[$i] \n";
   }
?>

<?php
//Traversing an Indexed Array in reversed order.
   $numbers = array(10, 20, 30, 40, 50);
   $i = count($numbers)-1;
   while ($i>=0){
      echo "numbers[$i] = $numbers[$i] \n";
      $i--;
   }
?>



<?php

//Accessing the Array Elements Using Index
   $arr1 = array(10, 20, 30, 40, 50);
   $size = count($arr1);

   for ($i=0; $i<$size; $i++){
      $arr2[$size-$i-1] = $arr1[$i];
   }

   for ($i=0; $i<$size; $i++){
      echo "arr1[$i] = $$arr1[$i] arr2[$i] = $$arr2[$i] \n";
   }
?>


<?php
//Traversing an Indexed Array Using "foreach" Loop
   $arr1 = [10, 20, 30, 40, 50];
   foreach ($arr1 as $val){
      echo "$val \n";
   }
?>


<?php
   $arr1 = [10, 20, 30, 40, 50];
   foreach ($arr1 as $key => $val){
      echo "arr1[$key] = $val \n";
   }
?>