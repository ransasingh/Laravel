<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';



    function iterate() {
       echo "MyClass::iterate: <br>";
       foreach ($this as $key => $value) {
           echo  "$key => $value <br>";
       }
    }
}

$class = new MyClass();
$class->iterate();

?>