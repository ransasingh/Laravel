<?php  
   $sub1=60;
   $sub2=40;
   $sub3=60;
   $sub4=50;
   $total=$sub1+$sub2+$sub3+$sub4;
   $per = ($total / 400) * 100;
    echo "Total marks is ". "$total";
    echo "<br>";
    echo "Total percentage is " ."$per%";
    echo "<br>";       
    // $marks=68;      
    if ($per<33){    
        echo "fail";    
    }    
    else if ($per>=34 && $per<50) {    
        echo "D grade";    
    }    
    else if ($per>=50 && $per<65) {    
       echo "C grade";   
    }    
    else if ($per>=65 && $per<80) {    
        echo "B grade";   
    }    
    else if ($per>=80 && $per<90) {    
        echo "A grade";    
    }  
    else if ($per>=90 && $per<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
?> 