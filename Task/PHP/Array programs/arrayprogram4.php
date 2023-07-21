<?php
$studentinfo=array(array('Name'=>'Raviraj','age'=>20,'grade'=>'B','city'=>'ahemdabad'),
                array('Name'=>'suresh','age'=>21,'grade'=>'c','city'=>'Rajasthan','email'=>'ss34@gmail.com'));

echo "<pre>";
// //Display the student's name and city from the $studentInfo array.
// echo "Student Name: " . $studentinfo['Name'];
// echo "<br>";
// echo "City: " . $studentinfo['city'];

//Add a new key-value pair 'email' with the value 'ravi.raj@gmail.com' to the $studentInfo array.
$studentinfo['email'] = 'ravi.raj@gmail.com';


print_r($studentinfo);
echo "</pre>";

?>
