<?php #}
// String
$name = "John Doe";

// Integer
$age = 30;

// Float
$price = 19.99;

// Boolean
$isAvailable = true;

// Array
$colors = array("Red", "Green", "Blue");

// Null
$nothing = null;

// Print the variables
echo $name; // Output: John Doe
echo $age; // Output: 30
echo $price; // Output: 19.99
echo $isAvailable; // Output: 1 (true is represented as 1 in PHP)
echo $colors[0]; // Output: Red
echo $nothing; // No output, as the variable is null
?>

<?php
$globalVar = "I am a global variable";

function testGlobal() {
    global $globalVar; // Accessing the global variable inside a function
    echo $globalVar;
}

testGlobal(); // Output: I am a global variable
?>



<?php
function testLocal() {
    $localVar = "I am a local variable";
    echo $localVar;
}

testLocal(); // Output: I am a local variable

// Uncommenting the following line will cause an error, as $localVar is not accessible outside the function
// echo $localVar;
?>



<?php
function testStatic() {
    static $staticVar = 0;
    $staticVar++;
    echo $staticVar;
}

testStatic(); // Output: 1
testStatic(); // Output: 2
testStatic(); // Output: 3
?>



<?php
// Using $_SERVER to get server information
echo $_SERVER['PHP_SELF']; // Output: /path/to/your/script.php
echo $_SERVER['SERVER_NAME']; // Output: localhost

// Using $_GET to get data from URL
// URL: http://example.com/script.php?name=John
echo $_GET['name']; // Output: John

// Using $_POST to get data from a form
// Assuming a form submission with a field named 'email'
echo $_POST['email']; // Output depends on the submitted email value

// Using $_SESSION
session_start();
$_SESSION['user'] = 'Jane Doe';
echo $_SESSION['user']; // Output: Jane Doe

// Using $_COOKIE
// Assuming a cookie named 'username' is set
echo $_COOKIE['username']; // Output depends on the cookie value
?>