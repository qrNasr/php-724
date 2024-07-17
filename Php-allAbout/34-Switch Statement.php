<?php

switch ($x) {
    case 0:
       echo "x equals 0";
    break;
    case 1:
       echo "x equals 1";
    break;
    case 2:
       echo "x equals 2";
    break;
 }

//case 1 checks if x value is o, returns x equals o.
//case 2 checks if x value is 1, returns x equals 1.
//case 3 checks if x value is 2, returns x equals 2.
?>

<?php
   $x=10;
   switch ($x) {
      case 0:
      case 1:
      case 2:
         echo "x between 0 and 2 \n";
      break;
      default:
         echo "x is less than 0 or greater than 2";
   }
   //added deault case. if all the above cases are not met.
?>

<?php
/**The switch-endswitch Statement
PHP allows the usage of alternative syntax by delimiting the switch construct with switch-endswitch statements. The following version of switch case is acceptable.*/
   $x=0;
   switch ($x) :
      case 0:
         echo "x equals 0";
      break;
      case 1:
         echo "x equals 1 \n";
      break;
      case 2:
         echo "x equals 2 \n";
      break;
      default:
         echo "None of the above";
   endswitch
?>

<?php
//Using the Break Statement in Switch…Case
// Obviously, you needn’t write a break to terminate the default case, it being the last case in the switch construct.
   $d = date("D");

   switch ($d){
      case "Mon":
         echo "Today is Monday";
      break;

      case "Tue":
         echo "Today is Tuesday";
      break;

      case "Wed":
         echo "Today is Wednesday";
      break;

      case "Thu":
         echo "Today is Thursday";
      break;

      case "Fri":
         echo "Today is Friday";
      break;

      case "Sat":
         echo "Today is Saturday";
      break;

      case "Sun":
         echo "Today is Sunday";
      break;

      default:
         echo "Wonder which day is this ?";
   }
?>