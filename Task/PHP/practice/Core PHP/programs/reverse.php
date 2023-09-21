<?php
//Write a PHP program to reverse given number.
 
 
$num = 123456789;  
$x = 0;
$n =$num;
 
while(floor($num))
{  
$mod = $num%10;
$x = $x * 10 + $mod;  
$num = $num/10;
}  
echo "Reverse of $n is $x.";

 


?>