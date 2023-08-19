<?php
class controller {
    public $baseURL = "";
    function __construct()
    {
    
        $this->baseURL= "http://localhost/Laravel/PT/Project/Assests/";
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    switch ($_SERVER['PATH_INFO']) {
        case '/home':
           include_once("views/header.php");
           include_once("views/home.php");
           include_once("views/footer.php");

            break;
        
        default:
            # code...
            break;
    }
}




}
$controller= new controller();





?>