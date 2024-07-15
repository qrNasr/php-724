<?php
  $x = 5;
  if ($x > 10) {
    echo "x is greater than 10";
  }
?>


<?php
  $x = 5;
  if ($x > 10) {
    echo "x is greater than 10";
  } else {
    echo "x is less than or equal to 10";
  }
?>

<?php
  $x = 5;
  if ($x > 10) {
    echo "x is greater than 10";
  } elseif ($x == 5) {
    echo "x is equal to 5";
  } else {
    echo "x is less than 5";
  }
?>

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
?>

<?php
  $x = 5;
  $result = ($x > 10) ? "x is greater than 10" : "x is less than or equal to 10";
  echo $result;
?>
