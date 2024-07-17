<?php
// ""
echo "<h2>Array loop 1 </h2>";
$arr = [12, 13, 14, 15, 16];
// will print the poistion, datatype
var_dump($arr);
$ar2 = [12, 13, 14, 15, 16, 12.4];
var_dump($ar2);
// will print the poistion, datatype
var_dump($ar2);
// will print the poistion, datatype
foreach ($arr as $ar) {
    echo "The datatype of this items is " . gettype($ar);
    echo "<br>";
}

echo "<h2>end of loop 1 </h2>";

echo "<h2>Array loop 2 </h2>";
foreach ($ar2 as $k) {
    echo "The datatype of this items is " . gettype($k);
    echo "<br>";
}
echo "<h2>end of loop 2 </h2>";
?>
