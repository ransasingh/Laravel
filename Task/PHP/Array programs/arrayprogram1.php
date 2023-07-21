<?php
//Write a PHP program to merge (by index) the following two arrays.

// $array1 = array(array(77, 87), array(23, 45));
$array1 = array("PHP","java");
$array2 = array("Tops", "com");
echo "<pre>";
// print_r(array_merge($array1,$array2));
print_r(array_combine($array1,$array2));
echo "</pre>";
?>