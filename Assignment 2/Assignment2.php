<?php
echo "<b> MODULE – 4(Advance PHP) </b>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <h3>Q1.What Is Object Oriented Programming? </h3>
    <p>OOP stands for Object-Oriented Programming.</p>

    <p> programming is about writing procedures or functions that perform operations on the data,
        while object-oriented programming is about creating objects that contain both data and functions.</p>


    <p>Object-oriented programming has several advantages over procedural programming:</p>
    <li>OOP is faster and easier to execute</li>
    <li>OOP provides a clear structure for the programs</li>
    <li>OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug</li>
    <li>OOP makes it possible to create full reusable applications with less code and shorter development time</li>

    <h2> OOPS Stand Four Piller:-</h2>
    <ul>
        <li>Encapsulation</li>
        <li>Inheritance</li>
        <li>Abstraction</li>
        <li>Polymorphism</li>
    </ul>


    <h2>Q2.What Are Properties Of Object Oriented Systems? </h2>

    <ul>
        <b> Properties of Object Oriented Systems</b>
        <li>Class</li>
        <li>Object</li>
        <li>Encapsulation</li>
        <li>Inheritance</li>
        <li>Abstraction</li>
        <li>Polymorphism</li>
    </ul>
    <li><b>Class</b></li>
    <p>A class is an entity that determines how an object will behave and what the object will contain.
        In other words, it is a blueprint or a set of instruction to build a specific type of object.</p>
    <p>Class is a collection of data member and member fucntions only</p>
    <p>without instantce of class we are not able to access the property of that class</p>

    <li><b>Object</b></li>
    <p>with the help of NEW keyword we can create an object of class</p>
    <p>A class defines an individual instance of the data structure. We define a class once and then make many objects that belong to it. Objects are also known as an instance.</p>
    <li><b>Encapsulation</b></li>

    <p>Encapsulation is a process to wrap data into single unit its done through class, Class is an example of encapsulation</p>
    <p>Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.</p>

    <li><b>Inheritance</b></li>
    <p>It is a concept of accessing the features of one class from another class. If we inherit the class features into another class, we can access both class properties. We can extends the features of a class by using 'extends' keyword.</p>
    <ul>
        <li>Types of Inheritance</li>
    </ul>
    <ul>
        <li>Single Inheritance</li>
        <li>Multilevel Inheritance</li>
        <li>Multiple Inheritance</li>
        <li>Hierarchical Inheritance</li>
        <li>Hybrid Inheritance</li>
    </ul>
    <li>PHP only support <b>Single Inheritance</b> And <b>Multilevel Inheritance</b></li><br>

    <li><b>Abstraction</b></li>
    <p>Any representation of data in which the implementation details are hidden (abstracted).</p>
    <p>we cant create an object of abstrated Class</p>
    <p>abstrated Class only able to contain abstacted method.</p>
    <p>An abstract method is a method that is declared, but not implemented in the code.</p>
    <p>An abstract class or method is defined with the <b> abstract </b> keyword</p>

    <li><b>Polymorphism</b></li>
    <p>Polymorphism allows objects of different classes to respond differently based on the same message.</p>
    <p>To implement polymorphism in PHP, you can use either abstract classes or interfaces.</p>
    <p>Generally, it is of two types: compile-time (overloading) and run time (overriding), but polymorphism in PHP does not support overloading, or in other words, compile-time polymorphism</p>

    <h2>Q3.What Is Difference Between Class And Interface? </h2>
    <br><br>
    <table border="1">
        <tr>
            <th>Class</th>
            <th>Interface</th>
        </tr>
        <tr>
            <td>1.A class is a blueprint for objects</td>
            <td>1.An interface is a blueprint for classes</td>
        </tr>
        <tr>
            <td>2.A class can inherit another class</td>
            <td>2.An Interface cannot inherit a class</td>
        </tr>
        <tr>
            <td>3. A class can be inherited by another class using the keyword <b>'extends'</b></td>
            <td>>3.An Interface can be inherited by a class using the keyword<b> 'implements'</b> <br>and it can be inherited by another interface using the keyword 'extends'</td>

        </tr>
        <tr>
            <td>4.A classes and their properties and methods can have access modifiers like public, private, and protected.These modifiers control the visibility and accessibility of class members.</b></td>
            <td>4.All methods in an interface are implicitly public. Interfaces cannot have properties or constants, only method declarations.</td>

        </tr>
        <tr>
            <td>5.Classes are used to create objects, define their properties, and specify their behaviors. They provide the structure and functionality for objects.</td>
            <td>5.Interfaces are used to define a contract that classes must adhere to. They specify what methods a class must implement, without declaring how they should be implemented. Interfaces are used to establish a common interface across different classes or to achieve polymorphism.</td>
        </tr>

    </table>

    <h2>Q4. What Is Overloading? </h2>
    <li> Overloading in PHP provides means to dynamically create properties and methods.</li>
    <li>These dynamic entities are processed via magic methods, one can establish in a class for various action types.</li>
    <li>All overloading methods must be defined as Public.</li>
    <li>After creating object for a class, we can access set of entities that are properties or methods not defined within the scope of the class.</li>
    <li>Such entities are said to be overloaded properties or methods, and the process is called as overloading.</li>
    <li>For working with these overloaded properties or functions, PHP magic methods are used.</li>
    <b>Some of the magic methods which is useful for property overloading.</b>
    <li>__set(): It is triggered while initializing overloaded properties.</li>
    <li>__get(): It is utilized for reading data from inaccessible Properties.</li>
    <li>__isset(): This magic method is invoked when we check overloaded properties with isset() function.</li>
    <li>__unset(): This function will be invoked on using PHP unset() for overloaded properties.</li>

    <b>example of function overloading</b>
    <pre>
        class myclass{
            public function __call($name,$arguments){
                echo "function name:".$name;
                echo "function arguments:";
                print_r($arguments);
            }
        }
        $myobj= new myclass;
        echo   $myobj->testing(); //without parameter
        echo   $myobj->testing(10,20); //with parameter
    </pre>
    <br>

    <h2>Q5. What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example </h2>
    <p>The Scope Resolution Operator (also called Paamayim Nekudotayim) or, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.

        When referencing these items from outside the class definition, use the name of the class.

        It's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static).</p>

    <b>Example of Scope Resolution Operator</b>
    <pre>

            class myclass
            {
                public static $staticdatamember = "hello";
                
                public static function staticfunction()
                {
                    echo "Static method Called";
                }
            }
            <b>// Accessing a static datamember using the Scope Resolution Operator</b>
            echo myclass::$staticdatamember;
            <b>// Calling a static method using the Scope Resolution Operator</b>
            echo myclass::staticfunction();
        </pre>

    <h2>Q6.What are the differences between abstract classes and interfaces? </h2>
    <table border="1">
        <tr>
            <th>abstract classes</th>
            <th>interfaces</th>
        </tr>
        <tr>
            <td>An abstract class is a class that cannot be instantiated on its own and is meant to be inherited by other classes.</td>
            <td>It declares method names, but does not provide any implementation details</td>
        </tr>
        <tr>
            <td>Abstract classes cannot be instantiated directly. They inherited by child classes.</td>
            <td> Interfaces cannot be instantiated directly either. They are implemented by classes using the implements keyword.</td>
        </tr>
        <tr>
            <td>Child classes that inherit from the abstract class must provide implementations for all the abstract methods.</td>
            <td>Interfaces only declare method signatures, without any implementations.</td>
        </tr>
        <tr>
            <td>A class can inherit from only one abstract class using the extends keyword. Abstract classes can provide a base structure and shared behavior for child classes. </td>
            <td>A class can implement multiple interfaces using the implements keyword. This allows a class to define multiple contracts and adhere to the method signatures defined in each interface</td>
        </tr>
        <tr>
            <td>Abstract classes can have properties and methods with different access modifiers like public, private, and protected. </td>
            <td>All methods declared in an interface are implicitly public. Interfaces cannot have properties or constants; they only declare method signatures</td>
        </tr>
    </table>

    <h2>Q7.Define Constructor and Destructor? </h2>
    <ul>
        <li><b>Constructor:</b></li>
        <ul>
            <li>A constructor is a special method that is automatically called when an object of a class is created.</li>
            <li>the constructor method is defined using the __construct() magic method.</li>
            <pre>
                class construct{
                    public function __construct()
                    {
                        echo "construct called";
                    }
                }
                //Creating an object of construct class.
                $obj= new construct; 
            </pre>
            <?php
            // class construct
            // {
            //     public function __construct()
            //     {
            //         echo "construct called";
            //     }
            // }
            // //Creating an object of construct class.
            // $obj = new construct;
            ?>
        </ul>
        <li><b>Destructor:</b></li>
        <ul>
            <li>A destructor is a special method that is automatically called when an object is no longer referenced or when the script execution ends. It is used to perform any necessary cleanup tasks, such as releasing resources or closing open connections, before the object is destroyed and the memory is freed</li>
            <li>the destructor method is defined using the __destruct() magic method.</li>
            <pre>
                class destructor
                {
                    public function __destruct()
                    {
                        echo "destruct called";
                    }
                    
                }
                //Destructor is automatically called before the object is destroyed
                $obj = new destructor;
            </pre>
            <?php
            // class destructor
            // {
            //     public function __destruct()
            //     {
            //         echo "destruct called";
            //     }
            // }
            // //Destructor is automatically called before the object is destroyed
            // $obj = new destructor;
            ?>

        </ul>
    </ul>
    <h2>Q8. How to Load Classes in PHP? </h2>
    <ul>
        <li>An autoloading function loads a class, an interface, or a trait from a PHP file.</li>
        <li>Use the<b> spl_autoload_register() </b> to autoload the classes, interfaces, and traits.</li><br>
        <ul>
            <li>Types of load classes</li>
            <ul>
                <li>Autoloading</li>
                <li>Manual Class Loading</li>
                <li>Using Composer</li>
            </ul>
            <li>Autoloding:</li>
            <ul>
                <li>Autoloading is a convenient way to automatically load classes as they are needed, without manually including or requiring their corresponding files.</li>
                <li>The file name must match the case of the terminating class name.</li>
                <li>using the built-in<b> spl_autoload_register()</b> function to register an autoloader function</li>
            </ul>
            <li>Manual Class Loading:</li>
            <ul>
                <li>Manually load classes by explicitly including or requiring their corresponding files using require_once or include_once statements.</li>
                
            </ul>
            <li>Using Composer:</li>
            <ul>
                <li>Use Composer's autoloading, you need to define the autoloading configuration in your project's<b> composer.json </b> file and run the <b>composer install </b> to generate the autoloader files. </li>
                
            </ul>
            
        </ul>
    </ul>
    
    <br>
    <h2>Q9.  How to Call Parent Constructor?  </h2>
    
    
    
    
    
    
    
    
    
    


</body>

</html>