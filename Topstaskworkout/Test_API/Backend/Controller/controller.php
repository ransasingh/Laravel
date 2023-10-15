<?php

session_start();
include_once("Model/model.php");
class controller extends model
{

    function __construct()
    {
        ob_start();
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                 

                    break;

                default:
                    # code...
                    break;
            }
        }
        ob_flush();
    }
}
$controller = new controller();
