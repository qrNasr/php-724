<?php
   $d = date("D");

   if ($d == "Fri")
      echo "Have a nice weekend!";
   else
      echo "Have a nice day!";
?>

<?php
   $d = date("D");
   if ($d == "Fri")
      echo "<h3>Have a nice weekend!</h3>";

   elseif ($d == "Sun")
      echo "<h3>Have a nice Sunday!</h3>";

   else
      echo "<h3>Have a nice day!</h3>";
?>

<?php
   $x=13;
   if ($x%2==0) {
      if ($x%3==0)
         echo "<h3>$x is divisible by 2 and 3</h3>";
      else
         echo "<h3>$x is divisible by 2 but not divisible by 3</h3>";
   }

   elseif ($x%3==0)
      echo "<h3>$x is divisible by 3 but not divisible by 2</h3>";

   else
      echo "<h3>$x is not divisible by 3 and not divisible by 2</h3>";
?>