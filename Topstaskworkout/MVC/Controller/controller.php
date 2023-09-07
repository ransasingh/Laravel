<?php
session_start();
require_once("model/model.php");

class Controller extends model
{
    public $base_url = "";
    public function __construct()
    {
        ob_start();

        // echo "<pre>";
        // print_r($_SERVER);
        parent::__construct();

        echo  $this->base_url;
        // echo "<br>";
        $ReqURI = explode("/", $_SERVER['REQUEST_URI']);
        // print_r($ReqURI);
        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ReqURI[1] . "/" . $ReqURI[2] . "/" . $ReqURI[3] . "/" .  "public/";
        // echo "<br>";
        // echo "</pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/rooms':
                    include_once("Views/header.php");
                    include_once("Views/rooms.php");
                    include_once("Views/footer.php");
                    break;
                case '/news':
                    include_once("Views/header.php");
                    include_once("Views/news.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;

                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
                case '/login':
                    // include_once("Views/header.php");
                    include_once("Views/login.php");
                    if (isset($_REQUEST['login'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        $Loginres = $this->login($_POST['username'], $_POST['password']);
                        if ($_POST['username'] != "" && $_POST['password'] != ""){
                        $_SESSION['Userdata'] = $Loginres['Data'];
                        // echo "<pre>";
                        // print_r($_SESSION['Userdata']);
                        // print_r($Loginres);
                        if ($Loginres['Code'] == 1) {
                            if ($Loginres['Data']->role_id == 1) {
                                header("location:Admindashboard");
                            } else {
                                header("location:home");
                            }
                        } else {
                            echo " <script>
                        alert('Invalid User')
                        </script> ";
                        }
                    } else {
                        echo " <script>
                        alert('Enter  Username And Password!!!')
                        </script> ";
                    }
                        
                    }



                    // include_once("Views/footer.php");
                    break;

                case '/registration':
                    // include_once("Views/header.php");
                    include_once("Views/Register.php");
                    if (isset($_REQUEST['btn-regist'])) {
                        // echo "call data";
                        array_pop($_REQUEST);
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        $hobbydata = implode(",", $_REQUEST['Hobby']);
                        unset($_REQUEST['Hobby']);
                        $data = array_merge($_REQUEST, array('Hobby' => $hobbydata));


                        // echo "<pre>";
                        // print_r($hobbydata);
                        // echo "<pre>";
                        //     print_r($data);
                        echo "<pre>";
                        print_r($data);
                        echo "</pre>";

                        $insertres = $this->insert("users", $data);
                        print_r($insertres);
                        if ($insertres['Code'] == 1) {
                            header("location:login");
                        }
                    }
                    // include_once("Views/footer.php");
                    break;
                case '/Admindashboard':
                    include_once("Views/Admindashboard/adminheader.php");
                    include_once("Views/Admindashboard/dashboard.php");
                    include_once("Views/Admindashboard/adminfooter.php");
                    break;

                case '/allusers':
                    $allusers = $this->select("users", array("role_id" => 2));
                    // echo "<pre>";
                    // print_r($allusers);
                    // exit;

                    include_once("Views/Admindashboard/adminheader.php");
                    include_once("Views/Admindashboard/allusers.php");
                    include_once("Views/Admindashboard/adminfooter.php");
                    break;

                case '/delete':
                    $DeleteRes = $this->Delete("users", array("id" => $_GET['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:allusers");
                    }

                    break;
                case '/edit':
                    $EditRes = $this->select("users", array("id" => $_GET['userid']));
                    // echo "<pre>";
                    // print_r($EditRes['Data']);
                    // echo "</pre>";
                    include_once("Views/Admindashboard/edituser.php");
                 

                   

                    break;
                default:

                    # code...
                    break;
            }
        } else {
            header("location:home");
        }

        ob_flush();
    }
}


$Controller = new Controller;
