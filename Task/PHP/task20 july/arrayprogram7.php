<?php
//Remove duplicates from an array without using any inbuilt functions?
$number=array(1, 3, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$newArr = array();
foreach($number as $val){
    $newArr[$val] = $val;
    }
    echo "<pre>"; 
    print_r($newArr);
    echo "</pre>";
    ?>
