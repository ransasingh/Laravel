<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
  

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];

    echo "Name: $name <br>";
    echo "Email: $email";
}
else {
    echo "no valid information";
}
?>
