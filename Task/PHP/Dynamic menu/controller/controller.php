<?php
include_once("model/model.php");
class controller extends model {
public function __construct(){
    parent::__construct();
if(isset($_SERVER['PATH_INFO'])){
    switch ($_SERVER['PATH_INFO']) {
        case '/home':
            include_once("Views/header.php");
            include_once("Views/home.php");
            include_once("Views/footer.php");
            break;
        
        default:
            # code...
            break;
    }
}
}

}
$controller =  new controller();
