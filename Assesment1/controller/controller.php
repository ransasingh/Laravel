<?php

use controller as GlobalController;

require_once("model/model.php");

class controller extends model
{
    public function __construct(public $baseURL = null)
    {
        parent::__construct();

        $this->baseURL = "http://localhost/Laravel/Assesment1/";
        if (isset($_SERVER['PATH_INFO'])) {

            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include("view/header.php");
                    include("view/home.php");
                    include("view/footer.php");
                    break;
                case '/about':
                    include("view/header.php");
                    include("view/about.php");
                    include("view/footer.php");
                    break;
                case '/banker':
                    include_once("view/Banker/bankerheader.php");
                    include_once("view/home.php");
                    include_once("view/footer.php");
                    break;
                case '/Customer':
                    include_once("view/Customer/customerheader.php");
                    include_once("view/home.php");
                    include_once("view/footer.php");
                    break;
                case '/Add':
                    include_once("view/Banker/bankerheader.php");
                    include_once("view/Banker/Add.php");
                    if(isset($_POST['Add'])){
                        array_pop($_POST);
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";
                        $addres = $this->insert("users",$_POST);
                        echo "<pre>";
                        print_r($addres);
                        echo "</pre>";
                       
                       

                    }
                    include_once("view/footer.php");
                    break;
                    case '/viewall':
                        include_once("view/Banker/bankerheader.php");
                        include_once("view/Banker/viewall.php");
                        include_once("view/footer.php");
                        break;
                    case '/search':
                        include_once("view/Banker/bankerheader.php");
                        include_once("view/Banker/search.php");
                        include_once("view/footer.php");
                        break;
                case '/login':
                    include("view/login.php");
                    // if(isset($_POST['Login'])){
                    //     $loginRes= $this->Login($_POST['username'],$_POST['password']);
                    //     print_r($loginRes['data']);
                    // }
                    

                    break;

                default:
                    # code...
                    break;
            }
        }
        else{
            header("location:home");
        }
    }
}
$controller = new GlobalController();
