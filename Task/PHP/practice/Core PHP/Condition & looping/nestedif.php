<?php
//this program example of nested if and apply of  two condition
$age = 27;  
$nationality = "Indian";  

if ($nationality == "Indian")  
{
    if($age>=18 )
    {
        echo "Eligiblity for voting";

    }
    else{
        echo "not eligiblity for voting";
    }
}
?>
