<?php

class Car {
    
    public $make;
    public $model;
    public $year;
    public $color;
    private $price;
    public $priceTitle;

  
     public function setPrice($price) {
        $this->price = $price;
    }


      public function getPrice() {
        return $this->price;
    }


     public function start() {
        return "The $this->make $this->model is starting...";
    }

    public function accelerate() {
        return "The $this->make $this->model is accelerating...";
    }

    public function brake() {
        return "The $this->make $this->model is braking...";
    }

    public function honk() {
        return "Beep beep!";
    }
}


class ElectricCar extends Car {
   
    public $batteryType;


    public function start() {
        return "The $this->make $this->model is starting silently...";
    }
}


$car = new Car();
$car->make = 'Toyota';
$car->model = 'Camry';
$car->year = 2020;
$car->color = 'Silver';
$car->setPrice(25000);
$car->priceTitle = 'Base Price';


$electricCar = new ElectricCar();
$electricCar->make = 'Tesla';
$electricCar->model = 'Model S';
$electricCar->year = 2022;
$electricCar->color = 'Red';
$electricCar->setPrice(75000);
$electricCar->priceTitle = 'Starting Price';
$electricCar->batteryType = 'Lithium-ion';

// Output
echo "Car: $car->make $car->model ($car->year) - Color: $car->color <br>";
echo "Price Title: $car->priceTitle <br>";
echo "Price: $" . $car->getPrice() . " <br>";
echo $car->start() . " <br>";

echo "Electric Car: $electricCar->make $electricCar->model ($electricCar->year) - Color: $electricCar->color <br>";
echo "Price Title: $electricCar->priceTitle <br>";
echo "Price: $" . $electricCar->getPrice() . " <br>";
echo "Battery Type: $electricCar->batteryType <br>";
echo $electricCar->start() . " <br>";
?>
