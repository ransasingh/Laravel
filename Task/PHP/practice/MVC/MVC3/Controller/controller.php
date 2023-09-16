<?php
include_once("model/model.php");
class controller extends model
{
    public $baseURL = "";
    public function __construct()
    {

        $this->baseURL = "http://localhost/Laravel/Task/PHP/practice/MVC/MVC3/Public/";
        //    echo "<pre>";
        //    print_r($_SERVER);
        //    echo "<pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("view/header.php");
                    include_once("view/main.php");
                    include_once("view/footer.php");

                    break;

                    // case '/about':
                    // include_once("view/header.php");
                    // include_once("view/about.php");
                    // include_once("view/footer.php");

                    //     break;
                    // case '/blog':
                    // include_once("view/header.php");
                    // include_once("view/about.php");
                    // include_once("view/footer.php");

                    //     break;
                    // case '/why':
                    // include_once("view/header.php");
                    // include_once("view/about.php");
                    // include_once("view/footer.php");

                    //     break;
                case '/Register':
                    // include_once("view/header.php");
                    include_once("view/Register.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        $data= array_merge($_POST);
                        // print_r($data);
                        $insertres = $this->register('car', $data);
                        echo "<pre>";
                        print_r($insertres);
                        echo "<pre>";
                    }
                    // include_once("view/footer.php");

                    break;
                case '/login':
                    // include_once("view/header.php");
                    include_once("view/login.php");
                    // include_once("view/footer.php");

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
