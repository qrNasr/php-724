<?php
   for ($i=1; $i<=10; $i++){
      echo "Iteration No: $i \n";
   }
?>

<?php
   //decrement loop
   for ($i=10; $i>=1; $i--){
      echo "Iteration No: $i \n";
   }
?>

<?php
//Iterating an indexed array using "for" loop
   $numbers = array(10, 20, 30, 40, 50);

   for ($i=0; $i<count($numbers); $i++){
      echo "numbers[$i] = $numbers[$i] \n";
   }
?>

<?php
/*Iterating an Associative Array Using "for" Loop
An associative array in PHP is a collection of key-value pairs. An arrow symbol (=>) is used to show the association between the key and its value. We use the array_keys() function to obtain array of keys.

The following for loop prints the capital of each state from an associative array $capitals defined in the code −*/
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
/*Using Nested "for" Loops in PHP
If another for loop is used inside the body of an existing loop, the two loops are said to have been nested.

For each value of counter variable of the outer loop, all the iterations of inner loop are completed.*/
   for ($i=1; $i<=3; $i++){
      for ($j=1; $j<=3; $j++){
         echo "i= $i j= $j \n";
      }
   }
?>


<?php
   $str = "IloveLaravel";
   for ($i=0; $i<strlen($str); $i++){
      for ($j=0; $j<=$i; $j++){
         echo "$str[$j]";
      }
      echo "\n";
   }
?>