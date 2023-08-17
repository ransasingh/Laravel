<?php

use controller as GlobalController;
require_once("model/model.php");

class controller extends model {
 public function __construct(public $baseURL=null) {
    $this->baseURL= "http://localhost/Laravel/Task/PHP/practice/MVC/Asessment1/";
    if(isset($_SERVER['PATH_INFO'])){

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
          case '/login':
          include("view/login.php");
        if(isset($_POST['Login'])){
            $loginRes= $this->Login($_POST['username'],$_POST['password']);
            print_r($loginRes['data']);
        }
         
              break;
          
          default:
              # code...
              break;
        }
    }
}



}
$controller= new GlobalController();








?>