<?php
function product($str,$str2=12){
    echo "$str age is a $str2 ";
}
// In this call, the default value 12
// will be considered
product("Ranjeet");
echo "<br>";
//calling function
product("Ravi",20)
?>