<?php
session_start();
require_once("Model/Model.php");

class controller extends model
{

    public function __construct(public $baseURL = null)
    {
        $this->baseURL = "http://localhost/Laravel/Task/PHP/practice/MVC/MVC/Assest/";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "<pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("view/header.php");
                    include_once("view/home.php");
                    include_once("view/footer.php");
                    break;
                case '/about':
                    include_once("view/header.php");
                    include_once("view/about.php");
                    include_once("view/footer.php");
                    break;
                case '/service':
                    include_once("view/header.php");
                    include_once("view/service.php");
                    include_once("view/footer.php");
                    break;
                case '/shop':
                    include_once("view/header.php");
                    include_once("view/shop.php");
                    include_once("view/footer.php");
                    break;
                case '/Registration':

                    include_once("view/Registration.php");
                    if(isset($_POST['register'])){
                        array_pop($_POST);
                        $hobbydata = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        echo $hobbydata;
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";"
                        $data = array_merge($_POST, array("hobby" => $hobbydata));
                        echo "<pre>";
                        print_r($data);
                        echo "</pre>";





                    }

                    break;
                default:

                    break;
            }
        } else {
            header("location:home");
        }
    }
}
$controller = new controller;
