<?php
echo "<pre>";
echo "<h1><p>php array function</P></h1>";
echo "<p><h3>1.Creates an array</P></h3>";
//
$abc=array("ranjeet","singh","rajpurohit");
echo "<pre>";
print_r($abc);
echo "</pre>";
echo "<br>";
echo "<p><h3>2.Changes all keys in an array to lowercase or uppercase</h3></P>";
$age=array("Ranjeet"=>"37","ali"=>25,"Krishna"=>"21");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<p><h3>3.Splits an array into chunks of arrays<h3></P>";
print_r(array_chunk($age,2));
echo "<p><h3>4.Returns the values from a single column in the input array<h3></P>";
$a = array(
    array(
      'id' => 1101,
      'first_name' => 'Ranjeet',
      'last_name' => 'singh',
    ),
    array(
      'id' => 1102,
      'first_name' => 'Kasim',
      'last_name' => 'Ali',
    ),
    array(
      'id' => 1103,
      'first_name' => 'Krishna',
      'last_name' => 'dev',
    )
   
  );
$lastname=array_column($a,'last_name','first_name');

print_r($lastname);
echo "<p><h3>5.PHP count() function counts all elements in an array</h3></P>";
echo count($a);
echo "<p><h3>6.PHP sort() function sorts all the elements in an array.</h3></P>";
sort($abc);
print_r($abc);
echo "<p><h3>7.PHP array_reverse() function returns an array containing elements in reversed order.</h3></P>";
$reverseseason=array_reverse($abc);  
print_r($reverseseason);
echo "<p><h3>8.PHP array_search() function searches the specified value in an array. It returns key if search is successfu.</h3></P>";
$key=array_search("dev",$a); 
print_r($key);
echo "<p><h3>9.PHP array_intersect() function returns the intersection of two array. In other words, it returns the matching elements of two array.</h3></P>";
$name1=array("sonoo","john","vivek","smith");    
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);
print_r($name3);
?>
