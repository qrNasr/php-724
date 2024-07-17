<?php

$nestedArray = [
    "fruits" => ["apple" => "red", "banana" => "yellow"],
    "vegetables" => ["carrot" => "orange", "spinach" => "green"]
];

foreach ($nestedArray as $key => $subArray) {
    echo "Category: " . $key . "<br>";
    foreach ($subArray as $subKey => $value) {
        echo "Key: " . $subKey . ", Value: " . $value . "<br>";
    }
    echo "<br>";
}

/*

The provided code demonstrates how to loop through a nested array and print the keys and values. Let's break down the code step by step:

1. The code defines a nested array called `$nestedArray`. It has two main categories: "fruits" and "vegetables". Each category is represented by a sub-array, where the keys are the names of the fruits or vegetables, and the values represent their colors.

2. The outer loop `foreach ($nestedArray as $key => $subArray)` iterates through the main array `$nestedArray`. It assigns the key of each sub-array ("fruits" and "vegetables") to the variable `$key`, and the corresponding sub-array to the variable `$subArray`.

3. Inside the outer loop, the code echoes the category name using `echo "Category: " . $key . "<br>";`. This line prints the category name ("fruits" or "vegetables") followed by a line break.

4. The inner loop `foreach ($subArray as $subKey => $value)` iterates through each sub-array (`$subArray`) within the main array. It assigns the key of each element within the sub-array to the variable `$subKey`, and the corresponding value to the variable `$value`.

5. Inside the inner loop, the code echoes the key and value of each element using `echo "Key: " . $subKey . ", Value: " . $value . "<br>";`. This line prints the key and value of each element within the sub-array, separated by a comma, followed by a line break.

6. After the inner loop, the code echoes an additional line break using `echo "<br>";`. This line adds an extra line break between each category for better readability.

When you run this code, it will output the category name followed by the keys and values of each element within the sub-array. The output will look like this:

Category: fruits
Key: apple, Value: red
Key: banana, Value: yellow

Category: vegetables
Key: carrot, Value: orange
Key: spinach, Value: green

This code is a simple example of how to iterate through a nested array and access its keys and values. It can be useful for displaying or processing data that is organized in a hierarchical structure.
*/

?>
