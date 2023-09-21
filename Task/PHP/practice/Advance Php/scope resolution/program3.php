<?php
class Animal {
    Public $name;
    
    public function detail($name) {
        $this->name = $name;
    }
    
    public function makeSound() {
        return "Animal makes a sound.";
    }
}

class Dog extends Animal {
    public function deatil($name) {
        parent::deatil($name);
    }
    
    public function makeSound() {
        return "Dog barks.";
    }
    
    public function fetch() {
        return "Dog fetches a ball.";
    }
}
// Creating instances of the classes
$animal = new Animal("Generic Animal");
$dog = new Dog("Buddy");

// Accessing properties and methods of the Animal class
echo "Animal Name: " . $animal->name . "<br>"; // Output: Generic Animal
echo $animal->makeSound() . "\n"; // Output: Animal makes a sound.

// Accessing properties and methods of the Dog class
echo "Dog Name: " . $dog->name . "<br>"; // Output: Buddy
// echo $dog->makeSound() . "<br>"; // Output: Dog barks.
// echo $dog->fetch() . "<br>"; // Output: Dog fetches a ball.
?>