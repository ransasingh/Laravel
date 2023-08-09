<?php
//How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array.

// Using array() function
$cars = array("Volvo", "BMW", "Toyota"); //true 1 and false 0 

echo "<pre>";
print_r($cars)."<br>";
echo "</pre>";

// Using shorthand [] syntax 
$array1 = ["foo" => "bar","bar" => "foo"];
echo "<pre>";
print_r($array1)."<br>";
echo "</pre>";

// index array start index [0] to incresed [1].
$array2 =array(10,20,30,40,50,80);

echo "<pre>";
print_r($array2)."<br>";
echo "</pre>";

//associate array key and pair value
$array3=array("a"=>"yellow","b"=>"blue","c"=>"green");
echo "<pre>";
print_r($array3)."<br>";
echo "</pre>";

// multidimensional array 
$array4=array(array("Volvo",22,18),array("BMW",15,13),array("Toyto",5,2),array("Land Rover",17,15));
echo "<pre>";
print_r($array4)."<br>";
echo "</pre>";

// json string convert to array
$jsonString = '{"name":"Ranjeet","age":36,"isStudent":true}';

// Convert JSON string to array by json_decode
$array = json_decode($jsonString,true);
echo "<pre>";
var_dump($array);
echo "<br>";
print_r($array);
echo "</pre>";

// array convert to JASON string by json_encode
$data = array(
    "name" => "Ranjeet",
    "age" => 36,
    "city" => "Ahemdabad"
);

// Convert the array to a JSON string
$jsonString = json_encode($data);
echo $jsonString;

?>