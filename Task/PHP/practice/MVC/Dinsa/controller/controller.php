<?php


class Controller{
    public $baseURL = "";
Public function __construct()
{
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    $this->baseURL ="http://localhost/Laravel/Task/PHP/practice/MVC/Dinsa/assets/";
    if(isset($_SERVER["PATH_INFO"])){
switch ($_SERVER["PATH_INFO"]) {
    case '/main':
        include_once("Views/header.php");
        include_once("Views/main.php");
        include_once("Views/footer.php");
        break;
    case '/admindashboard':
        include_once("Views/admin/adminheader.php");
        include_once("Views//admin/admindashboard.php");
        include_once("Views//admin/adminfooter.php");
        break;
    case '/login':
        // include_once("Views/admin/adminheader.php");
        include_once("Views//admin/login.php");
        include_once("Views//admin/adminfooter.php");
        break;
    
    default:
        # code...
        break;
}
    }
    else{
        header("location:main");
    }
}

}
$Controller = new Controller();





?>
