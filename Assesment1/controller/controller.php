<?php
date_default_timezone_set('Asia/Kolkata');

session_start();

use controller as GlobalController;

require_once("model/model.php");

class controller extends model
{
    public function __construct(public $baseURL = null)
    {
        ob_start();
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
                    if (isset($_POST['Add'])) {
                        array_pop($_POST);
                       
                        $originalDate = $_POST['dob'];
                        $newDate = date('d/m/Y', strtotime($originalDate));
                        unset($_POST['dob']);
                        // echo $newDate;
                        //
                        $data = array_merge($_POST,array("dob"=>$newDate));
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        $addres = $this->insert("bank", $data);
                        echo "<pre>";
                        print_r($addres);
                        echo "</pre>";
                        if($addres['Code'] == 1){
                            header("location:viewall");
                        }



                    }
                    include_once("view/footer.php");
                    break;
                case '/viewall':
                    include_once("view/Banker/bankerheader.php");
                    $viewusers = $this->select("bank");
                    // echo "<pre>";
                    // print_r($viewusers['Data']);
                    // echo "</pre>";
                    include_once("view/Banker/viewall.php");
                    include_once("view/footer.php");
                    break;
                case '/search':
                    include_once("view/Banker/bankerheader.php");
                    if (isset($_POST['serach'])) {
                        $SerchRes = $this->select("bank", array("accountno" => $_REQUEST['accountno'], "role_id" => "2"));
                        // echo "<pre>";
                        // print_r($SerchRes);
                        // echo "</pre>";
                    }
                    include_once("view/Banker/search.php");
                    include_once("view/footer.php");
                    break;
                case '/login':
                    include("view/login.php");
                    if (isset($_POST['Login'])) {
                        $loginRes = $this->login($_POST['username'], $_POST['password']);
                        // print_r($loginRes['Data']);
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            if ($loginRes['Code'] == 1) {
                                $_SESSION['userdata'] = $loginRes['Data'];
                                // print_r($_SESSION['userdata']);
                                if ($loginRes['Data']->role_id == 1) {
                                    header("location:banker");
                                } else {
                                    header("location:Customer");
                                }
                            } else {
                                echo "invalid";
                            }
                        } else {
                            echo "enter valid username and password";
                        }
                    }



                    break;
                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:login");
        }
        ob_flush();
    }
}
$controller = new GlobalController();
