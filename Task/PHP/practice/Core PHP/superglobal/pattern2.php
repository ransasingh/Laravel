<!DOCTYPE html>
<html>
<head>
    <title>Pattern Program</title>
</head>
<body>
    <form method="GET">
        <label for="rows">Number of Rows:</label>
        <input type="number" name="rows" id="rows">

        <input type="submit" value="Generate Pattern">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET) {
        $rows = $_GET['rows'] ?? '';

        if ($rows !== '') {
            $rows = intval($rows);
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo '* ';
                }
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>
