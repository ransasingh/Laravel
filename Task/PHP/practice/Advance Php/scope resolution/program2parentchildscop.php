<?php
class ParentClass {
    Public $parentProperty;
    
    public function __construct($value) {
        $this->parentProperty = $value;
    }
    
    public function parentMethod() {
        return "This is a method from the ParentClass.";
    }
}

class ChildClass extends ParentClass {
    public $childProperty;
    
    public function __construct($parentValue, $childValue) {
        // Call the parent class constructor
        parent::__construct($parentValue);
        
        $this->childProperty = $childValue;
    }
    
    public function childMethod() {
        return "This is a method from the ChildClass.";
    }
    
    // Override the parent method
    public function parentMethod() {
        return "This method is overridden in the ChildClass.";
    }
}
$parentObj = new ParentClass("Hello, Parent!");
$childObj = new ChildClass("Hello, Parent!", "Hello, Child!");

// Accessing properties and methods of the ParentClass
echo $parentObj->parentProperty; // Output: Hello, Parent!
echo $parentObj->parentMethod(); // Output: This is a method from the ParentClass.

// Accessing properties and methods of the ChildClass
echo $childObj->parentProperty; // Output: Hello, Parent!
echo $childObj->parentMethod(); // Output: This method is overridden in the ChildClass.
echo $childObj->childProperty;  // Output: Hello, Child!
echo $childObj->childMethod();  // Output: This is a method from the ChildClass.
?>