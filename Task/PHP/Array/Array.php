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

$student = array("SchoolName"=>array
("10th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
"Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
"Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
"11th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
"Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
"Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
"12th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
"Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
"Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48))
));
echo "<pre>";
print_r($student);
echo "</pre>";
?> 
</body>
</html>
