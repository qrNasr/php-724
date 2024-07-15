<?php
// ""
$fn = "Nasr Henida elzaanaty";

// str_contains()
echo "Check if it contains 'k': ";
if (str_contains($fn, 'k')) {
    echo "Yes, it contains 'k'.";
} else {
    echo "No, it does not contain 'k'.";
}
echo "<br>";

// str_ends_with()
echo "Check if it ends with 'k': ";
if (str_ends_with($fn, 'k')) {
    echo "Yes, it ends with 'k'.";
} else {
    echo "No, it does not end with 'k'.";
}
echo "<br>";

// str_decrement()
echo "Decrement the string: " . str_decrement($fn) . "<br>";

// str_replace()
echo "Replace 'k' with 'l': " . str_replace('k', 'l', $fn) . "<br>";

// str_shuffle()
echo "Shuffled string: " . str_shuffle($fn) . "<br>";

// str_split()
$characters = str_split($fn);
echo "Split string into an array: ";
print_r($characters);
echo "<br>";

// str_starts_with()
echo "Check if it starts with 'Nasr': ";
if (str_starts_with($fn, 'Nasr')) {
    echo "Yes, it starts with 'Nasr'.";
} else {
    echo "No, it does not start with 'Nasr'.";
}
echo "<br>";

// str_getcsv()
$csvString = "John,Doe,25,USA";
$csvArray = str_getcsv($csvString);
echo "CSV string: " . $csvString . "<br>";
echo "CSV array: ";
print_r($csvArray);
echo "<br>";

// str_word_count()
$wordCount = str_word_count($fn);
echo "Word count: " . $wordCount . "<br>";

// str_pad()
$paddedString = str_pad($fn, 20, '*', STR_PAD_BOTH);
echo "Padded string: " . $paddedString . "<br>";

// str_repeat()
$repeatedString = str_repeat($fn, 3);
echo "Repeated string: " . $repeatedString . "<br>";

// str_ireplace()
$replacedString = str_ireplace('k', 'l', $fn);
echo "Case-insensitive replace: " . $replacedString . "<br>";

// STR_PAD_BOTH
$paddedStringBoth = str_pad($fn, 20, '*', STR_PAD_BOTH);
echo "Padded string (both sides): " . $paddedStringBoth . "<br>";

?>
