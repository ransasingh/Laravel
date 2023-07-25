<?php
echo date("D-M-Y");
echo date("D-m-Y");
echo date("D-M-y");
echo date("D-M-Y");
echo date("D-M-Y");
echo date("D-M-Y");
echo date("D-M-Y");
echo "<br>";
//use of $dateTime->format('U') function total second 
$dateTime = new DateTime('2008-09-22');
echo "new DateTime('2008-09-22'); &#36;dateTime->format('U'); <br>";
echo $dateTime->format('U');
echo "<br>";
echo "<br>";
$date = new DateTime('2008-09-22');
echo "new DateTime('2008-09-22'); &#36;date->getTimestamp(); <br>";
echo $date->getTimestamp();
echo "<br>";
echo "<br>";
//strtotime time function used 
$originalDate = "2010-03-21";
echo "<br>strtotime".strtotime($originalDate)."<br>";
$newDate = date("d-m-Y", strtotime($originalDate));
?>