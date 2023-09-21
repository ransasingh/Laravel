<?php
 interface test1  
 {  
     public function f1();  // simple method mot to be define in interface .its using in class 
 }  
 interface test2  
 {  
     public function f2();  
 }  
 class demo implements test1,test2  
 {  
     public function f1()  
     {  
         echo "method 1...";  
     }  
     public function f2()  
     {  
         echo "method2...";  
     }  
     public function f3()  
     {  
         echo "method3...";  
     }
 }  
 $obj= new demo();  
 $obj->f1();  
 $obj->f2();  
 $obj->f3();  
 





?>