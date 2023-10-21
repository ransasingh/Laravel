<?php

session_start();
include_once("Model/model.php");
class controller extends model
{

    function __construct()
    {
        // ob_start();
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/register':
                    $data = json_decode(file_get_contents("php://input"), true);
                    $registerfetch = $this->insert("users", $data);
                    // print_r( $registerfetch);
                    echo json_encode($registerfetch);

                    break;
                case '/loginbyapi':
                    $data = json_decode(file_get_contents("php://input"), true);
                    $LoginDatabyApiRes = $this->Select("users", array("email" => $_GET['email'], "password" => $_GET['password']),$data);

                    echo json_encode($LoginDatabyApiRes);
                    break;
                case '/viewapidata':
                    $viewdataapi= $this->Select("users");
                     echo json_encode( $viewdataapi);
                    break;
                default:
                    # code...
                    break;
            }
        }
        // ob_flush();
    }
}
$controller = new controller();
