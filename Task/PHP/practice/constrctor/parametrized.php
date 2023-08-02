<?php
class MyClass {
    Public $name ;
    Public $age;

    // Parameterized constructor method
    public function __construct($name, $age) {
        $this->property1 = $$name;
        $this->property2 = $age;
    }

    // Method to get the values of properties
    public function getValues() {
        return "Property1: " . $this->property1 . ", Property2: " . $this->property2;
    }
}

// Creating an instance of the MyClass with constructor arguments
$obj = new MyClass("value1", 30);

// Accessing the method to get property values
echo $obj->getValues();
// Property1: Value 1, Property2: Value 2;


?>
