    <?php

    $arr = [0, 11, 12, 14, 15];
    echo "<h2>loop 1 </h2>";
    foreach ($arr as $item) {
        if ($item >= 11) {
            echo "The number $item is greater than 11" . "<br>";
        } else {
            echo "The number is less than or equal to 11" . "<br>";
        }
    }
    echo "<h2>end of loop 1 </h2>";
    echo "<h2>loop 2 </h2>";
    for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo "<br>";
    }
    echo "<h2>end of loop 2 </h2>";

    $nums = [2, 4, 3, 13, 1];
    echo "<h2>loop 3 </h2>";
    foreach ($nums as $num) {
        if ($num % 2 == 0) {
            echo "The number $num is even" . "<br>";
        } else {
            echo "The number $num is odd" . "<br>";
        }

    }
    echo "<h2>end of loop 3 </h2>";

    $x = 0;
    echo "<h2>loop 4 </h2>";
    while ($x < 10) {
        echo $x;
        echo "<br>";
        $x++;
    }
    echo "<h2>end of loop 4 </h2>";
    echo "<h2>loop 5 </h2>";
    $y = 0;
    do {
        echo $y;
        echo "<br>";
        $y++;
    } while ($y < 10);
    echo "<h2>end of loop 5 </h2>";


    ?>
