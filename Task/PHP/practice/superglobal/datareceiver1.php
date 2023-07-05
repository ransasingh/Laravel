<?php
// $_GET
// $_POST
// $_FILES
// $_REQUEST
// $GLOBAL

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" > 
    <input type="text" , name="name", id=name>
    <input type="submit" , name="submit", id="btn">
    <input type="file", name="file", value="">
    
    
    




    </form>         
</body>
</html>
