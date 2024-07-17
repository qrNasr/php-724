<?php
   $var = "Hello";
   echo "The variable \$var is of " . gettype($var) . " type" .PHP_EOL;

   $var = 10;
   echo "The variable \$var is of " . gettype($var) . " type" .PHP_EOL;

   $var = true;
   echo "The variable \$var is of " . gettype($var) . " type" .PHP_EOL;

   $var = [1,2,3,4];
   echo "The variable \$var is of " . gettype($var) . " type" .PHP_EOL;
?>

<?php
   $var1=100;
   $var2="100";
   // Type juggling also takes place during calculation of expression. In this example, a string variable containing digits is automatically converted to integer for evaluation of addition expression.
   $var3=$var1+$var2;
   var_dump($var3);
?>
<?php
// If a string starts with digits, trailing non-numeric characters if any, are ignored while performing the calculation. However, PHP parser issues a notice as shown below −
   $var1=100;
   $var2="100 days";
   $var3=$var1+$var2;
   var_dump($var3);
?>

<?php
/*Type Casting vs Type Juggling
Note that "type casting" in PHP is a little different from "type juggling".
In type juggling, PHP automatically converts types from one to another when necessary. For example, if an integer value is assigned to a variable, it becomes an integer.
On the other hand, type casting takes place when the user explicitly defines the data type in which they want to cast.
Example
Type casting forces a variable to be used as a certain type. The following script shows an example of different type cast operators −*/
   $var1=100;
   $var2=(boolean)$var1;
   $var3=(string)$var1;
   $var4=(array)$var1;
   $var5=(object)$var1;
   var_dump($var2, $var3, $var4, $var5);
?>

<?php
//Casting a variable to a string can also be done by enclosing in double quoted string −
   $var1=100.50;
   $var2=(string)$var1;
   $var3="$var1";
   var_dump($var2, $var3);
?>
