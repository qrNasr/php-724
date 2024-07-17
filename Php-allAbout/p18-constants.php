<?php

// Valid constant names
define("ONE",     "first thing");
define("TWO2",    "second thing");
define("THREE_3", "third thing");
define("__THREE__", "third value");

// Invalid constant names
define("2TWO",    "second thing");
// Defining a Named Constant
//The define() function in PHP library is used to define a named constant at runtime.
//The syntax of define() function is:
define(string $const_name, mixed $value, bool $case = false): bool

?>
<?php
   define("CONSTANT", "Hello world.");

   echo CONSTANT;
   // echo Constant;
?>

<?php
//define array of objects
   define(
      $name="LANGS",
      $value=array('PHP', 'Java', 'Python')
   );
   var_dump(LANGS);
?>

<?php
   define('MAX', 100);

   if (defined('MAX')) {
      echo MAX;
   }
?>

<?php

constant(string $name): mixed

?>

<?php
   define("MINSIZE", 50);

   echo MINSIZE;
   echo PHP_EOL;
   echo constant("MINSIZE");	// same thing as the previous line
?>
