<?php
$a=20;
$b=10;
$c=30;
$d=40;

// Aithmetic Operators
$add=$a + $b;
echo $add; //prints 30
echo "<br>";
// Subtraction
$sub=$a - $b;
echo $sub; //prints 10
echo "<br>";
// Multiplication
$Mul=$a * $b;
echo $Mul; //prints 200
echo "<br>";
// Division
$Div=$a / $b;
echo $Div; //prints 2
echo "<br>";
// Modulus
$Mod=$a % $b;
echo $Mod; //prints 0
echo "<br>";
// Exponentiation
$Exp=$a % $b;
echo $Exp; //prints 0
echo "<br>";
echo "<br>";


// Logical or Relational Operators
$var1=true;
$var2=false;
$result1=$var1 AND $var2;// Logical AND
echo "$result1";
echo "<br>";
$result1=$var1 OR $var2;// Logical OR
echo "$result1";
echo "<br>";
$result1=$var1 XOR $var2;// Logical XOR
echo "$result1";
echo "<br>";
$result1=$var1 && $var2;// Logical AND
echo "$result1";
echo "<br>";
$result1=$var1 || $var2;// Logical OR
echo "$result1";
echo "<br>";



//Comparison Operators
var_dump($a== $b); //Equal
echo "<br>";
var_dump($a=== $b); //Identical
echo "<br>";
var_dump($a!= $b); //	Not equal
echo "<br>";
var_dump($a <> $b); //	Not equal
echo "<br>";
var_dump($a !== $b); //	Not identical
echo "<br>";
var_dump($a > $b); //	Greater than
echo "<br>";
var_dump($a < $b); //   Less than
echo "<br>";
var_dump($a >= $b); //	Greater than or equal to
echo "<br>";
var_dump($a <= $b); //	Less than or equal to
echo "<br>";



//Assignment Operators
$a+=20;
echo $a;
echo "<br>";
$a-=20;
echo $a;
echo "<br>";
$a*=20;
echo $a;
echo "<br>";
$a/=20;
echo $a;
echo "<br>";
$a%=20;
echo $a;
echo "<br>";




//Array Operators
//print_r using array print with indexing 
//
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";
print_r($x == $y); // Equality of $x and $y
echo "<br>";
print_r($x === $y); // 	Identity of $x and $y
echo "<br>";
print_r($x != $y); // 	Inequality of $x and $y
echo "<br>";
print_r($x <> $y); // 	Inequality of $x and $y
echo "<br>";
print_r($x <> $y); // 	Inequality of $x and $y
echo "<br>";
print_r($x !== $y); // 	Non-identity of $x and $y
echo "<br>";



//Increment/Decrement Operators
$x=5;
echo ++$x;    //Pre-increment
echo "<br>"; 
echo $x++;   //Post-increment
echo "<br>"; 
echo --$x;    //Pre-decrement
echo "<br>";
echo $x--;   //Post-decrement
echo "<br>";


//String Operators
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2; //Concatenation
echo "<br>";
$txt1.=$txt2;
echo $txt1; //Concatenation assignment
echo "<br>";



//Conditional or Ternary Operators
// example of Condtional assignment operator
$age = 25;
$message = ($age >= 18) ? "Adult" : "Minor";
echo $message;
?>