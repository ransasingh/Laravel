<?php

class myClass{
    public function somemethod(array $data,myClassOther $objOfChild){  
    // public function somemethod($data){   
        echo "Method $data[0] <br>";   
        $objOfChild->somemethodChild();
    }
}
class myClassOther{
    public function somemethodChild(){     
        echo "Child Method ";   
    }
}
$myClass = new myClass;
$myClassOther = new myClassOther;
// echo $myClass->somemethod("test");// //Uncaught TypeError: myClass::somemethod()
echo $myClass->somemethod(array("test"),$myClassOther );


?>