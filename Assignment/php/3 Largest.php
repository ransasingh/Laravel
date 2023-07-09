<?php
$num1 = 25;
$num2 = 50;
$num3 = 75;

$largest = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);

echo "The largest of $num1, $num2, and $num3 is: $largest";
?>
