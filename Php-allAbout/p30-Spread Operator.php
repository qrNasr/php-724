<?php
//PHP recognizes the three dots symbol (...) as the spread operator. The spread operator is also sometimes called the splat operator.
//In the example below, the elements in $arr1 are inserted in $arr2 after a list of its own elements.
   $arr1 = [4,5];
   $arr2 = [1,2,3, ...$arr1];
//use print_r to print an array.
   print_r($arr2);
?>

<?php
//The Spread operator can be used more than once in an expression. For example, in the following code, a third array is created by expanding the elements of two arrays.
   $arr1 = [1,2,3];
   $arr2 = [4,5,6];
   $arr3 = [...$arr1, ...$arr2];

   print_r($arr3);
?>

<?php
//Note that the same result can be obtained with the use of array_merge() function, as shown below −
   $arr1 = [1,2,3];
   $arr2 = [4,5,6];
   $arr3 = array_merge($arr1, $arr2);

   print_r($arr3);
?>

<?php
/*Instead of providing a value to each of the arguments individually, the values from an array will be unpacked into the corresponding arguments, using ... (three dots) before the array.*/
   function  myfunction($x, $y, $z=30) {
      echo "x = $x  y = $y  z = $z";
   }

   myfunction(...[10, 20], z:30);
?>

<?php
//In the following example, the return value of a function is an array. The array elements are then spread and unpacked.
   function get_squares() {
      for ($i = 0; $i < 5; $i++) {
         $arr[] = $i**2;
      }
      return $arr;
   }
   $squares = [...get_squares()];
   print_r($squares);
?>