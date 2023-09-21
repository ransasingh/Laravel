<?php
class myclass{
    function f1(){
       echo  "function overriding";
    }
}
    class childclass{
        function f1(){
           echo  "childclass";
        }
}

$myclass= new childclass();
$myclass->f1();


?>