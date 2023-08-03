<?php
class ParentClass{
    public function __construct() {
        echo "called";
    }
    public function somethingMethod() {
        echo "somethingMethod called";
    }
}
$ParentClassObject = new ParentClass;
?>