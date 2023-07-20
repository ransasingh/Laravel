<?php
//argument
// function f1($name,$age){
//     echo "Hello $name,$age";
//     echo "<br>";
//     }
//     f1("Ranjee",36);
//     f1("abhi",35);
//return argument
// function cube($n){  
//     return $n*$n*$n;  
//     }  
// echo "Cube of 3 is: ".cube(3); 
//variable length argument
   function add(...$number){
    $sum=0;
    foreach($number as $n){
        $sum+=$n;

    }
    return $sum;

   }
   echo add(1,2,3,4);
?>