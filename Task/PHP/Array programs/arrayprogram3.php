<?php
 //Delete element from array, at index=2 and push and pop value 

//  $arr = array("Ranjeet", "shailesh", "pradeep", "ravi", "Tiger");
 $arr = array(array("name"=>"Ranjeet","city"=>"rajasthan"),array("name"=>"shailesh","city"=>"Gujrat"));
 echo "<pre>";
 $index = 0;
 unset($arr[$index]);
 array_pop($arr);
 print_r($arr);

 echo "</pre>";

//  $index = 2;
//   unset($arr[$index]);
//   echo "<pre>";
//   print_r($arr);
//   echo "</pre>";
//   array_pop($arr);
//   echo "<pre>";
//   print_r($arr);
//   echo "</pre>";
//   array_push($arr,"tiger");
//   echo "<pre>";
//   print_r($arr);
//   echo "</pre>";




?>