<?php
//Write a PHP program to print table of a number.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = $_POST["rows"];
    $columns = $_POST["columns"];

    echo "<h2>Multiplication Table</h2>";
    echo "<table>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columns; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
    <label for="rows">Number of Rows:</label>
    <input type="number" name="rows" id="rows" required<br>

    <label for="columns">Number of Columns:</label>
    <input type="number" name="columns" id="columns" required><br>

    <input type="submit" value="Generate Table">
</form>
</body>
</html>


