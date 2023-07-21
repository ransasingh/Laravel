<?php
//PHP program to sort an integer array in ascending and descending order
//integer array in ascending 
$array=array(10, 80, 100, 11, 22, 21, 19, 10, 88, 89);
sort($array);
foreach ($array as $key => $num) {
 echo $num;
 echo "<br>";
}
echo "<hr>";
//integer array in  descending order
$array=array(10, 80, 100, 11, 22, 21, 19, 10, 88, 89);
rsort($array);
foreach ($array as $key => $num) {
 echo $num;
 echo "<br>";
}
?>