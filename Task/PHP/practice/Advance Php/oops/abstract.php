<?php  
abstract class a  
{  
abstract public function dis1();  
abstract public function dis2();  
}  
class b extends a  
{  
public function dis1()  
    {  
        echo "example of abstract class";  
    }  
    public function dis2()  
    {  
        echo "    demo";     
    }  
}  
$obj = new b();  
$obj->dis1();  
$obj->dis2();  
?>  