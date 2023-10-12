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
                    include_once("View/header.php");
                    include_once("View/home.php");
                    break;
                case '/viewalluser':
                    $viewuser = $this->Select("users");
                    include_once("View/header.php");
                    include_once("View/viewdata.php");
                    // print_r($viewuser);


                    break;
                case '/login':
                    // include_once("View/header.php");
                    include_once("View/login.php");
                    if (isset($_POST['login'])) {
                        array_pop($_POST);
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            $Loginresult = $this->Select("users", array("username" => $_POST['username'], "password" => $_POST['password']));

                            // print_r($Loginresult );    
                        }
                        if ($Loginresult['Code'] == 1) {
                            $_SESSION['Userdata'] = $Loginresult['Data'];
                            echo " <script>
                        alert('Login Success');
                        window.location.href='viewalluser';
                        </script>";
                        } else {
                            echo " <script>
                        alert('Invalid User');
                        window.location.href='login';
                        </script>";
                        }
                    }



                    break;
                case '/register':
                    // include_once("View/header.php");
                    include_once("View/registration.php");
                    if (isset($_REQUEST['register'])) {
                        array_pop($_REQUEST);
                        $hobbydata = implode(",", $_REQUEST['hobby']);
                        unset($_REQUEST['Hobby']);
                        $data = array_merge($_REQUEST, array('hobby' => $hobbydata));
                        $insertres = $this->insert("users", $data);
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        if ($insertres['Code'] == 1) {
                            header("location:login");
                        }
                    }

                    break;
                case '/logout':
                    session_destroy();
                    echo " <script>
                        alert('Logout Success');
                        window.location.href='login';
                        </script>";

                case '/edit':
                    $Viewuser = $this->Select("users", array("id" => $_GET['userid']));
                    include_once("View/header.php");
                    include_once("View/edit.php");
                    if (isset($_POST['update'])) {
                        array_pop($_POST);
                        $HobbyDataString = implode(",", $_POST['hobby']);
                        unset($_POST['hobby']);
                        $data = array_merge($_POST, array("hobby" => $HobbyDataString));
                        $UpdateUserRes = $this->Update("users", $data, array("id" => $_GET['userid']));
                        // echo "<pre>";
                        // print_r($UpdateUserRes);
                        // echo "</pre>";
                        if ($UpdateUserRes['Code'] == 1) {
                            header("location:viewalluser");
                        }
                    }

                    break;
                case '/delete':
                    include_once("View/header.php");
                    include_once("View/viewalluser.php");
                    $Deleteres = $this->Delete("users",array("id"=>$_GET['userid']));
                    if( $Deleteres['Code'] == 1){
                        echo " <script>
                        alert('Data Delete Successfully');
                        window.location.href='viewalluser';
                        </script>";
                    }

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
