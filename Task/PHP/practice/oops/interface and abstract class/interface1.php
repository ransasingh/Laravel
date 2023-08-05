<?php
interface Animal {
    public function sound();
}
class cat implements Animal{
    public function sound(){
        echo "muw";
    }
}
class dog implements Animal{
    public function sound(){
        echo "<br> hau";
    }
}
class mouse implements Animal{
    public function sound(){
        echo "<br> chuchu";
    }
}
$cat=  new cat();
$dog= new dog();
$mouse= new mouse();
$animals = array($cat, $dog, $mouse);
// $cat->sound();
// $mouse->sound()

// $dog->sound();
foreach($animals as $animal) {
    $animal->Sound();
  }
?>