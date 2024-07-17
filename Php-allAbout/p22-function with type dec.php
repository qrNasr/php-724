<?php
// function without variable data declreation.
   function addition($x, $y) {
      echo "First number: " . $x;
      echo "\nSecond number: " . $y;
      echo "\nAddition: " . $x+$y;
   }

   $x="10";
   $y=20;
   addition($x, $y);
?>

<?php
//int is added before x and y for data type.
function add(int $x, int $y) {
    echo "First number: $x Second number: $y Addition: " . $x+$y;
 }
 //call the functions.
 $ad=add(12,12);
 print($ad)
?>

<?php
// use strictt mode to force data type declareration.
// Strict mode
   // declare(strict_types = 1);
   function sum(int ...$ints) {

    return array_sum($ints);
  }

  print(sum(2, '3', 4.1));

?>