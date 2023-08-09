<?php
$array = [1, 2, 3, 4, 2, 1, 5, 6, 3, 7, 7];

// Use array_keys and array_flip to remove duplicates
$uniqueArray = array_keys(array_flip($array));

// Display the unique values
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>