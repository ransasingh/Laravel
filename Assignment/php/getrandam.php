<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$randomKey = array_rand($array); // Get a random key from the array
$randomValue = $array[$randomKey]; // Get the corresponding value

echo $randomValue;
?>