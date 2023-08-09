<?php 

 final class BaseClass{
  
  
   final public function test() {
       echo "BaseClass::test() called <br>";
   }
   
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called <br>";
   }
}


class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "ChildClass::moreTesting() called <br>";
   }
}
$childclass= new childclass();
$childclass->moreTesting();
// Results in Fatal error:  Cannot override final method BaseClass::moreTesting()
?>