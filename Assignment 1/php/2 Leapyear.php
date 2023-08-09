<?php
$startYear = 1901;
$endYear = 2016;

echo "Leap years between $startYear and $endYear:<br>";

for ($year = $startYear; $year <= $endYear; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo $year . "<br>";
            }
        } else {
            echo $year . "<br>";
        }
    }
}
?>
