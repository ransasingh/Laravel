<?php
class User {
    //declare class first
  Public $username;
  
  public function setUsername($name) 
  {
    $this -> username = $name;
  }
      
  public function getUsername()
  {
    return $this -> username;
  }  
}
 //extend parent class to child class (p-User and child-Admin)
 
class Admin extends User{
  public function expressYourRole()
  {
    return strtolower(__CLASS__);
  }
      
  public function sayHello()
  {
    return "Hello admin, " . $this -> getUsername();
  }
}
  
  
$admin1 = new Admin();
$admin1 -> setUsername("Rajasthan");
echo $admin1 -> sayHello();





?>
