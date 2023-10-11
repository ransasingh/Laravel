<?php
include_once("model/model.php");
class controller extends model{
    
    public $baseURL = "";
    public function __construct()
    {
        parent::__construct();
        $this->baseURL = "http://localhost/Laravel/Task/PHP/practice/Advance%20Php/MVC/MVCTest/assets/";
        if (isset($_SERVER['PATH_INFO'])) {
        switch ($_SERVER['PATH_INFO']) {
            case '/home':
                include_once "View/adminheader.php";
                include_once "View/home.php";
                include_once "View/adminheader.php";
                break;
            case '/allusers':
                $allusers = $this->select("users");
                // print_r($alluser);
                include_once "View/adminheader.php";
                include_once "View/allusers.php";
                include_once "View/adminheader.php";
                
                break;
            
            default:
                # code...
                break;
        }
        }
    
    
}
}
$controller = new controller();


?>
