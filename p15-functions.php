<?php
echo "<h1>lets learn how to make function in php.</h1>";
echo "<h1>sum function.</h1>";
function sum($a, $b)
{
    return "The sum $a and $b is " . $a + $b;

}
echo sum(12, 13);
echo "<br>";
?>


<?php

echo "<h1>div function.</h1>";
function div($a, $b)
{
return "The division $a and $b is is " . ($a / $b);
}
echo div(23, 13);
echo "<br>";



?>

<?php
echo "<h1>mult function.</h1>";
function mult($a, $b)
{
return "The multiplication $a and $b is " . ($a * $b);
}
echo mult(23, 13);
echo "<br>";

?>
