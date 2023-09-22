<?php

class controller
{
    public $base_url = "";

    public function __construct()
    {

        // echo "<pre>";
        // print_r($_SERVER);
        $this->base_url = "http://localhost/Laravel/Task/PHP/practice/Advance%20Php/MVC/Resto/Assests/";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/menu':
                    include_once("Views/header.php");
                    include_once("Views/menu.php");
                    include_once("Views/footer.php");
                    break;
                case '/book':
                    include_once("Views/header.php");
                    include_once("Views/book.php");
                    include_once("Views/footer.php");
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
$controller = new controller();
