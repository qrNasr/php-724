<?php
/**The Null Coalescing Operator
The Null Coalescing Operator is represented by the "??" symbol. It acts as a convenient shortcut to use a ternary in conjunction with isset(). It returns its first operand if it exists and is not null; otherwise it returns its second operand./
$Var = $operand1 ?? $operand2*/
?>


<?php
   # $num = 10;
   $val = $num ?? 0;
   echo "The number is $val";
?>

<?php
//Now uncomment the first statement that sets $num to 10 and rerun the code −
   $num = 10;
   $val = $num ?? 0;
   echo "The number is $val";
?>