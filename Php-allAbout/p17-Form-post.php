<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to use get in PHP</title>
</head>

<body>

    <form action="./get" method="post">
        Name-1: <input type="text" name=><br>
        Name-2: <input type="text" name="name2"><br>
        <input type="button" value="submit" name="send">
    </form>

    <?php

if(isset($_POST["$send"])){
    echo $_POST["name1"]
}

    // The if statement checks if the $_POST["$send"] variable is set, which means that the form has been submitted.
    // If the condition is true, the PHP code uses the echo statement to display the value of the "name1" input field.

    ?>

</body>

</html>
