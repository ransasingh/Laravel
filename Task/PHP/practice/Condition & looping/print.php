<?php
$sub1=60;
$sub2=40;
$sub3=60;
$sub4=50;
$total=$sub1+$sub2+$sub3+$sub4;
$per=($total/400)*100;
echo "$per%";
echo "<br>";
echo "$total";
echo "<br>";
if($per>=60)
{
    echo "first division";
    echo "<br";
    echo "$total";
    

}
   else if ($per>=36 && $per<60) {
    echo "secound division";
   }
  



else{
    echo "failed";
}



?>