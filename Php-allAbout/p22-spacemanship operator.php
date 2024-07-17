<?php /*The Spaceship operator is one of the many new features introduced in PHP with its 7.0 version. It is a three-way comparison operator.

The conventional comparison operators (<, >, !=, ==, etc.) return true or false (equivalent to 1 or 0). On the other hand, the spaceship operator has three possible return values: -1,0,or 1. This operator can be used with integers, floats, strings, arrays, objects, etc.

Syntax
The symbol used for spaceship operator is "<=>".

$retval = operand1 <=> operand2
Here, $retval is -1 if operand1 is less than operand2, 0 if both the operands are equal, and 1 if operand1 is greater than operand2.

The spaceship operator is implemented as a combined comparison operator. Conventional comparison operators could be considered mere shorthands for <=> as the following table shows*/
?>

<?php
   $x = 5;
   $y = 10;
   $z = $x <=> $y/2;

   echo "$x <=> $y/2 = $z";
?>

<?php
   $x = 4;
   $y = 10;
   $z = $x <=> $y/2;

   echo "$x <=> $y/2 = $z";
?>

<?php
   $x = 7;
   $y = 10;
   $z = $x <=> $y/2;

   echo "$x <=> $y/2 = $z";
?>


<?php
   $x = "bat";
   $y = "ball";
   $z = $x <=> $y;

   echo "$x <=> $y = $z";
?>


<?php
   $x = "bat";
   $y = "baz";
   $z = $x <=> $y;

   echo "$x <=> $y = $z";
?>