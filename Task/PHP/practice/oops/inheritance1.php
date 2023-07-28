<?php
//parent class extend to child class and used $this keyword and create child class new object and used extend keyword for P to C inherited 
class fruits{
 public $name;
 public $color;
 function choice($name,$color)
 {
    $this->name=$name;
    $this->color=$color;
     } 
     function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
     

     }
}
class Strawberry  extends  fruits
{
    public function message() {
        echo "Am I a fruit or a berry? ";
}
}
$Strawberry  = new Strawberry("Strawberry ", "red");
$Strawberry->message();

$Strawberry->intro();
// echo $Strawberry->intro();
// echo $Strawberry->message();




?>