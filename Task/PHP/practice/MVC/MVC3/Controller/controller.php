<?php
class controller 
{
    public $baseURL ="";
    public function __construct(){
      
       $this->baseURL= "http://localhost/Laravel/Task/PHP/practice/MVC/MVC3/Public/";
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
            
            default:
                # code...
                break;
        }
       
    }else{
        header("location:home");    }

    }
}
$controller = new controller;
?>
