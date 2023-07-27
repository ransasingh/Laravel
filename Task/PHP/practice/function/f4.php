<?php
// program of Recursive function 
function factorial($num) :int {
    if ($num == 1) {
        return 1;
    }else{
        return $num * factorial($num-1);
    }
}

echo '<br> factorial of 5 is :  '.factorial(5);




?>