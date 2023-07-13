<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Types of array </h2>
  <h3>1.Numeric/Index array</h3>
  <?php  
$size=array("Big","Medium","Short");  
echo "<pre>";
print_r($size);
echo "</pre>"; 
?>  
<h3>2.Associative array</h3>
  <?php  
$size=array("Big=>50","Medium=>35","Short=>30"); 
echo "<pre>";
print_r($size);
echo "</pre>";
 
?>  
<h3>2.Multidimension array</h3>
  <?php  
$emp = array(array(1,"Ranjeet",400000),array(2,"Pradeep",500000),array(3,"raj",300000)); 
echo "<pre>";
print_r($emp);
echo "</pre>";
?> 
</body>
</html>
