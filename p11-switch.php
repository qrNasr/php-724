<?php
  $day = "Monday";
  switch ($day) {
    case "Monday":
      echo "Today is Monday";
      break;
    case "Tuesday":
      echo "Today is Tuesday";
      break;
    default:
      echo "Today is not Monday or Tuesday";
  }

/*In this example, the value of the $day variable is "Monday", so the code inside the case "Monday" block will be executed. The break statement is used to exit the switch statement once a match is found.

Here are some additional features of switch statements in PHP:

    Case sensitivity: Switch statements in PHP are case-sensitive, so "Monday" and "monday" would be treated as different values.
    Multiple cases: You can have multiple cases in a switch statement, and the code will execute the first one that matches.
    Default case: You can have a default case that will be executed if none of the other cases match.
    Fallthrough: If you don't use a break statement, the code will "fall through" to the next case, so you need to be careful when using multiple cases.
    Switch with strings: You can use switch statements with strings, but you need to use the === operator to compare the value of the variable with the case value.
    Switch with arrays: You can use switch statements with arrays, but you need to use the in_array() function to check if the value is in the array.
*/
?>
<?php
  $color = "red";
  switch ($color) {
    case "red":
      echo "The color is red";
      break;
    case "green":
      echo "The color is green";
      break;
    case "blue":
      echo "The color is blue";
      break;
    default:
      echo "The color is not red, green, or blue";
  }
?>
