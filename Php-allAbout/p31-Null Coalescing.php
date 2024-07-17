<?php
/*The Null Coalescing operator is one of the many new features introduced in PHP 7. The word "coalescing" means uniting many things into one. This operator is used to replace the ternary operation in conjunction with the isset() function.

Ternary Operator in PHP
PHP has a ternary operator represented by the "?" symbol. The ternary operator compares a Boolean expression and executes the first operand if it is true, otherwise it executes the second operand.

expr ? statement1 : statement2;
*/


?>

<?php

//check if a certain variable is set or not with the help of the isset() function, which returns true if declared and false if no
   $x = 1;
   $var = isset($x) ? $x : "not set";
   echo "The value of x is $var";
?>

<?php
   # $x = 1;
   //output: The value of y is not set
   $var = isset($y) ? $y : "not set";
   echo "The value of y is $var";
?>