<?php
class Car {
    private $brand;
    private $model;

    // Constructor method
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to get the car details
    public function getDetails() {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

// Creating an instance of the Car class with constructor arguments
$car1 = new Car("Toyota", "Corolla");

// Accessing the method to get car details
echo $car1->getDetails();
?>