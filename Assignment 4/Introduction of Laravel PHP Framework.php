<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP - Introduction of Laravel PHP Framework - Industry</title>
</head>

<body>
    <div class="container mt-1">
        <h1 class="text-center">PHP - Introduction of Laravel PHP Framework - Industry</h1>
        <b>What is Lravel</b>
      <p>Laravel is a framework built using the PHP scripting language. PHP is an open-source server-side language.
         In other words, it is a backend language responsible for handling and processing data on a website. 
         PHP on its own can not be used to create a web application.</p>
         <b>What is Laravel Routing</b>
         <p>Routing is one of the essential concepts in Laravel. Routing in Laravel allows you to route all your application requests to their appropriate controller. The main and primary routes in Laravel acknowledge and accept a URI (Uniform Resource Identifier) along with a closure, given that it should have to be a simple and expressive way of routing. In this tutorial, you will learn about the routing concept of Laravel.</p>
         <b>What is Laravel Controllers</b>
         <p>Controllers are another essential feature provided by Laravel. In place of defining the handling request logic in the form of Closures in route files, it is possible to organize this process with the help of Controller classes. So what the controllers do? Controllers are meant to group associated request handling logic within a single class. In your Laravel project, they are stored in the app/Http/Controllers directory. The full form of MVC is Model View Controller, which directs traffic among the Views and the Models.</p>
         <b>What is Laravel Views</b>
         <p>To get started, let's first define what views are in the context of Laravel. A view is a file containing a mix of PHP code, HTML markup, and Blade templates. These templates contain placeholders for dynamic content and are used to define the structure and layout of a web page. When a user requests the application, the view is rendered and returned to the user's browser.

Views are stored in the resources/views directory of the Laravel project. By default, Laravel comes with a set of predefined views, such as welcome.blade.php and errors/404.blade.php</p>

       <b> Explain ORM ?</b>
        <ul>
            <li>
                <p>Eloquent ORM (Object Relation Mapper) is easy to use for users who know how to use objects in PHP.</p>
            </li>
            <li>
                <p>The ORM is an important feature of the Laravel framework, considered a powerful and expensive feature of Laravel. The ORM works with database objects and is used to make relationships with database tables.</p>
            </li>
            <li>
                <p>Each table of the database is mapped with a particular eloquent model.The model object contains various methods to retrieve and update data from the database table. </p>
            </li>
            <li>
                <p>Eloquent ORM can be used with multiple databases by implementing ActiveMethod. This feature makes database-related tasks, such as defining relationships, simpler by defining the database tables. </p>
            </li>
            </ul>
      
       <b> Explain - Eloquent Relationships ? </b>
        <ul>
            <li>
                <p>When working with tables in a relational database, we can characterize relationships as connections between tables. This helps you organize and structure data effortlessly allowing for superior readability and handling of data.</p>
            </li>
            <li>
                <p>There are three types of database relationships in practice:</p>
                <ul>
                    <li>one-to-one : One record in a table is associated with one, and only one, in another table. For example, a person and a social security number.</li>
                    <li>one-to-many : One record is associated with multiple records in another table. For instance, a writer and their blogs.</li>
                    <li>many-to-many : Multiple records in a table are associated with multiple records in another table. Namely, students and the courses they are enrolled in.</li>
                </ul>
            </li>
           
        </ul>




    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>