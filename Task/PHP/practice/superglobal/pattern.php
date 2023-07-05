<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <title>Pattern Program</title>
</head> 
<body>
<form method="GET">
        <label for="rows">Number of Rows:</label>
        <input type="number" name="rows" id="rows">

        <input type="submit" value="Generate Pattern">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['rows'])) {
            $rows = $_GET['rows'];

            // Generate the pattern
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo '* ';
                }
                echo "<br>";
            }
        }
    }
    ?>
    


