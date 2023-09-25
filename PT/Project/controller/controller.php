<?php
class Controller
{
    public $base_url = "";
    public function __construct()
    {
    
        $this->base_url = "http://localhost/Laravel/PT/Project/Assests/";
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    if (isset($_SERVER['PATH_INFO'])) {
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
else {
    header("location:home");
}
    }
}






$Controller = new Controller;





?>