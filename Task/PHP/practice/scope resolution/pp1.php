<?php
class demo{
   public function sayhello(){
      echo "Hello World";
      echo "<br>";
   }
}
class myclass extends demo{
   public function sayhello(){
      parent::sayhello();
      echo "Hello PHP";
   }
}
$obj=new myclass();
$obj->sayhello();
?>