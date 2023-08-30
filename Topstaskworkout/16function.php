<?php

function funcName(){
    echo "1000 line";
}

// // funcName();
// // OLD PHP function without return START
// // function addition() {
// //     return "test"; 
// // }
// // OLD PHP function without return END

// // NEW PHP 7 function with return START
// // function addition() : int {
// //     // return "test"; //Uncaught TypeError: addition(): Return value must be of type int, string returned in
// //     return 50+50;
// // }
// // // NEW PHP 7 function with return END
// // echo addition()

// // function addition(Parameter1,Parameter2) : int {
// function addition($a,$b=0) : int {
//     // return "test"; //Uncaught TypeError: addition(): Return value must be of type int, string returned in
//     return $a+$b;
// }
// // NEW PHP 7 function with return END
// // echo addition(argument1,argument2)
// echo addition(50,90);
// echo "<br>";
// echo addition(60,80);
// echo "<br>";
// echo addition(50,8884540);
// echo "<br>";
// echo addition(50);

// function factorial($num) :int {
//     if ($num == 1) {
//         return 1;
//     }else{
//         return $num * factorial($num-1);
//     }
// }

// echo '<br> factorial of 5 is :  '.factorial(5);

// //Anonymous Function

// $unnamedFunction = function($name){
//     printf("<br>Hello %s\r\n", $name);
//   };
//   echo '<br>';
//   $unnamedFunction('World');
//   $unnamedFunction('PHP');
// ?>
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>


// <p> PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.</p>

// <p> In PHP, we can define Conditional function, Function within Function and Recursive function also.</p>

// <h2>Advantage of PHP Functions</h2>
// <p> <b> Code Reusability: </b> PHP functions are defined only once and can be invoked many times, like in other programming languages.</p>
// <p> <b> Less Code: </b> It saves a lot of code because you don't need to write the logic many times. By the use of function, you can write the logic only once and reuse it.</p>
// <p> <b> Easy to understand: </b> PHP functions separate the programming logic. So it is easier to understand the flow of the application because every logic is divided in the form of functions.</p>
// <blockquote>
// function functionname(){  
// //code to be executed  
// }  
// </blockquote>

// <ul>
// <li>User defined function</li>
// <li>Returning value function</li>
// <li>Variable function</li>
// <li>Internal (in-built) function</li>
// <li>Anonymous function</li>
// </ul>
// <ul class="list">
// <li>int</li>
// <li>float</li>
// <li>bool</li>
// <li>string</li>
// <li>interfaces</li>
// <li>array</li>
// <li>callable</li>
// </ul>

// <h2>PHP Recursive Function</h2>
// <p>Recursive functions are a powerful feature in PHP that allows a function to call itself repeatedly until a certain condition is met. In other words, a recursive function calls itself during its execution. Recursive functions can solve problems requiring repetitive computations, such as traversing nested data structures, searching or sorting algorithms, and mathematical calculations. However, recursive functions can be complex and require careful design to avoid infinite loops or excessive memory usage. It is important to understand the underlying recursion principles and use them judiciously in PHP programming to achieve optimal results.</p>


// <pre>
// Recursive functions are a powerful and useful feature in PHP that allows a function to call itself repeatedly until a certain condition is met. This technique can be especially useful when dealing with problems that require repetitive computations or operations, such as traversing nested data structures, sorting or searching algorithms, and mathematical calculations.

// At its core, recursion involves breaking down a complex problem into smaller, more manageable sub-problems that can be solved recursively. Each recursive function call works on a smaller subset of the problem until the base case is reached, at which point the function begins to return values and unwind the call stack.

// Recursive functions can be more elegant and efficient than iterative approaches in some cases, especially when dealing with large or complex data structures. However, iterative approaches may be more appropriate in situations where memory usage is a concern or when the problem can be solved more efficiently using a non-recursive algorithm.

// When using recursive functions in PHP, it is important to carefully design the function to ensure that it terminates correctly and does not consume too many resources. This means defining an appropriate base case that will eventually be reached, and ensuring that each recursive call works on a smaller subset of the problem until the base case is reached.

// PHP provides a built-in mechanism to limit the depth of recursive function calls using the debug.max_nesting_level configuration setting. This can help prevent infinite loops or excessive resource usage caused by recursive functions that do not terminate properly. However, it is important to use this setting judiciously and to ensure that the recursion depth limit is appropriate for the specific problem being solved.

// Recursive functions are a powerful tool in PHP that can simplify complex problems by breaking them down into smaller sub-problems. However, they must be used with care and attention to detail to ensure that they terminate correctly and do not consume excessive resources. By understanding how recursion works and when it is appropriate to use, PHP developers can add a powerful technique to their problem-solving toolbox.
// </pre>

// </body>
// </html>