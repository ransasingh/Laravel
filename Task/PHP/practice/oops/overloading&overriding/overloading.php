<?php
class overloading{
function test(){
    echo "function overloading ";
}
function test2(){
    echo "function overloading ";
}

}
$overloading= new overloading();
$overloading->test();


?>