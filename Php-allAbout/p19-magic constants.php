<?php
// magic constant __LINE__
   $x="Hello World";
   echo "$x. The current Line number is " . __LINE__ . ".";

   //output : Hello World. The current Line number is 5.
?>
<?php
//__FILE__
// This magic constant returns the full path and filename of the file. If used inside an include, the name of the included file is returned. Take a look at the following example −
   $x="Hello World";
   echo "$x. Current PHP script name is " . __FILE__ . ".";
?>
<?php
//__DIR__
// This magical constant returns the directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to "dirname(__FILE__)". This directory name does not have a trailing slash unless it is the root directory. See the following example −
   $x="Hello World";
   echo "$x. Directory of the Current PHP script name is " . __DIR__ . ".";
?>

<?php
// __FUNCTION__
// This magical constant returns the function name in which the constant is used, or {closure} for anonymous functions. The following example shows how it works −
   function hello(){
      $x="Hello World";
      echo "$x. The function name is ". __FUNCTION__ . "";
   }
   hello();
   //output:     Hello World. The function name is hello:
?>
<?php
//This constant returns the name of a class. The class name includes the namespace it was declared in. See the following example −
   class myclass {
      public function __construct() {
         echo "Inside the constructor of ". __CLASS__ . PHP_EOL;
      }
      function getClassName(){
         echo "from an instance method of " . __CLASS__ . "";
      }
   }
   $obj = new myclass;
   $obj->getClassName();

?>
<?php

// __METHOD__
// The __METHOD__ constant returns the class method name. The following example shows how it works −
   class myclass2 {
      public function __construct() {
         echo "Calling " . __METHOD__ . " of " . __CLASS__ ."<br>";
      }
      function mymethod2(){
         echo "Calling " . __METHOD__ . " of " . __CLASS__ ."";
      }
   }
   $obj = new myclass;
//    $obj->mymethod();
?>

<?php
// __TRAIT__
// It returns the trait name. The trait name includes the namespace it was declared in. In PHP, traits are a mechanism for code reuse. A trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a trait on its own.
   trait mytrait {
      public function hello() {
         echo "Hello World from " . __TRAIT__ ."";
      }
   }
   class myclass3 {
      use mytrait;
   }
   $obj = new myclass();
//    $obj->hello();
?>

<?php


// __NAMESPACE__
// This constant returns the name of the current namespace. In PHP, namespaces allow us to use classes / functions / constants of same name in different contexts without any conflict, thereby encapsulating these items. A namespace is a logical grouping of classes/functions depending on their relevance.

// The following example shows how you can use this magic constant −
   namespace myspace;
   class myclass {
      public function __construct() {
         echo "Name of the class: " . __CLASS__ . " in " . __NAMESPACE__ . "";
      }
   }
   $class_name = __NAMESPACE__ . '\myclass';
   $a = new $class_name;
?>


<?php

// ClassName::class
// Unlike the other magic constants, this magic constant does not start and end with the double underscore (__). It returns the fully qualified class name.

// The following example shows how you can use this magic constant −

   namespace myspace;
   class myclasss {
      public function __construct() {
         echo "Name of the class: " . myclass::class ;
      }
   }
   use myspace;
   $a = new myclass;
?>
