<?php

class Car {
 
    public $make;
    public $model;
    public $year;
    public $color;
    private $price; 

    public function setPrice($price) {
        $this->price = $price;
    }

 
    public function getPrice() {
        return $this->price;
    }

  
    // public function start() {
    //     return "The $this->make $this->model is starting...";
    // }

    // public function accelerate() {
    //     return "The $this->make $this->model is accelerating...";
    // }

    // public function brake() {
    //     return "The $this->make $this->model is braking...";
    // }

    // public function honk() {
    //     return "Beep beep!";
    // }
}


$car = new Car();


$car->make = 'Toyota';
$car->model = 'Camry';
$car->year = 2020;
$car->color = 'Silver';


$car->setPrice(25000);
$car->priceTitle = 'Base Price';


echo "Car: $car->make $car->model ($car->year) <br>";
echo " Color: $car->color <br>";
// echo "Price Title: $car->priceTitle  <br>";
echo "Price: $" . $car->getPrice() . " <br>";
?>
