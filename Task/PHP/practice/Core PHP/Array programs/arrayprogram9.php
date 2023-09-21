<?php
//If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );, 
//how do you extract the value 3 from the array?
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
$value=$a['three'];
echo "<pre>";
print_r($value);
echo "</pre>";

?>