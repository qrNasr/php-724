<?php
//In the following example, the division() function is defined with a return type as int.
   function division(int $x, int $y): int {
      $z = $x/$y;
      return $z;
   }

   $x=20.5;
   $y=10;

   echo "First number: " . $x;
   echo "\nSecond number: " . $y;
   echo "\nDivision: " . division($x, $y);
?>

<?php
//To make the division() function return a float instead of int, cast the numerator to float, and see how PHP raises the fatal error −
   function division2(int $x, int $y): int {
      $z = (float)$x/$y;
      return $z;
   }

   $x=20;
   $y=10;

   echo "First number: " . $x;
   echo "\nSecond number: " . $y;
   echo "\nDivision: " . division2($x, $y);
?>