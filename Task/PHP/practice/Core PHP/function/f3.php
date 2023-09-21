<?php  
//add() function with two parameter  

function add($x,$y){
$add=$x+$y;
echo  "add= $add <br><br> ";
} 
//sub() function with two parameter  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  
//mul() with two number
function mul($x,$y)    
{  
$mul=$x*$y;  
echo "mul = $mul <br><br>";  
}  
//division
function div($x,$y)    
{  
$div=$x/$y;  
echo "div = $div <br><br>";  
}  

//call function, get  two argument through input box and click on add or sub button  
  
if(isset($_POST['add'])){
    add($_POST['first'],$_POST['second']);
}  
if(isset($_POST['sub']))  
{  
//call sub() function  
sub($_POST['first'],$_POST['second']);  
}  
if(isset($_POST['mul']))  
{  
//call mul() function  
 mul($_POST['first'],$_POST['second']);  
} 
if(isset($_POST['div']))  
{  
//call div() function  
div($_POST['first'],$_POST['second']);  
} 


?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user input</title>

</head>
<body>
<form method="post"  >  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
<input type="submit" name="mul" value="multiplication"/>
<input type="submit" name="div" value="Division"/> 
</form> 
</body>
</html>
