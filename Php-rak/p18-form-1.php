<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex HTML Form with PHP</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        // Process the form data here
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Display a success message
        echo "<h2>Thank you for your submission!</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
    }
    ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>
