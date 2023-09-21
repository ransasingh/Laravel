<?php
class MyClass {
    public static $staticProperty = 10;

    public function __construct() {
        // You can access the static property using self or the class name
        echo self::$staticProperty;
        // or
        echo MyClass::$staticProperty;
    }
}

// Creating instances of the class
$obj1 = new MyClass(); // Output: 10
// $obj2 = new MyClass(); // Output: 10

// You can also modify the static property using the class name
MyClass::$staticProperty = 20;

// Output from both instances will reflect the change
$obj1 = new MyClass(); // Output: 20
// $obj2 = new MyClass(); // Output: 20
?>