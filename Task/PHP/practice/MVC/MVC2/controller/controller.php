<?php

session_start();
require_once("model/model.php");
// echo "<pre>";
//     print_r($_SERVER);
//     echo "<pre>";
class controller
{
    public $baseURL = "";
    public function __construct()
    {
        $this->baseURL = "http://localhost/MVC2/Assest/";
        $strtoarr = explode("/", $_SERVER['PHP_SELF']);
        $this->baseURL = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'];
        foreach ($strtoarr as $key => $value) {
            if ($value == "index.php") {
                break;
            } else {
             $this->baseURL .= $value . "/";
            }
        }

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once "View/header.php";
                    include_once "View/homepage.php";
                    include_once "View/footer.php";
                    break;
                case '/login':
                    // include_once "View/header.php";
                    include_once "View/login.php";
                    // include_once "View/footer.php";
                    break;
                case '/registration':
                   
                    include_once "View/registration.php";
                 
                    break;
                    case '/contact':
                        include_once "View/header.php";
                        include_once "View/contact.php";
                        include_once "View/footer.php";
                        break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
    }
}
$controller = new controller;
?>
