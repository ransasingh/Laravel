<?php
class poly{
function __get($data){
    echo $data;
}
function __set($key,$val){
    echo "Key is $key and value is $val";
}
function __call($methodname,$params)
    {
        echo "method is $methodname";
        echo "<pre>";
        print_r($params);
        echo "</pre>";
    }
}

$poly= new poly();
$poly->student;
echo "<br>";
$poly->username="test";
echo "<br>";
$poly->insert("username","password");






?>