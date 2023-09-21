<?php
class employee{
        public $name;
        public $salary;
    //without argument constructor
// function __construct(){
//     echo "This is my constrctor for employee";
// }
//with argument constructor
function __construct ($name, $salary){ 
    $this->name = $name;
    $this->salary = $salary;
}
}
$Ranjeet=  new employee("Ranjeet",10000);
$Ravi=  new employee("Ravi",20000);
$Shailesh=  new employee("Shailesh",2000000);
echo "The  salary is Ranjeet of $Ranjeet->salary ";
echo "The  salary is Shailesh of $Shailesh->salary ";


?>