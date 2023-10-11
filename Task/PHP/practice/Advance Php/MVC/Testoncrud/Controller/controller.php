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
        $this->base_url = "http://localhost/Laravel/Task/PHP/practice/Advance%20Php/MVC/Testoncrud/Public/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {             

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
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
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
                        // print_r($data);
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";

                        $insertres = $this->insert("users", $data);
                        // print_r($insertres);
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
                  
                    $allusers = $this->select("users" ,array("role_id" => 2));
                    // echo "<pre>";
                    // print_r($allusers);
                    // exit;

                    include_once("Views/Admindashboard/adminheader.php");
                    include_once("Views/Admindashboard/allusers.php");
                    include_once("Views/Admindashboard/adminfooter.php");
                    break;

                

                case '/delete':
                    $DeleteRes = $this->delete("users", array("id" => $_GET['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:allusers");
                    }

                    break;
                case '/edit':
                    include_once("Views/Admindashboard/adminheader.php");

                    include_once("Views/Admindashboard/adminfooter.php");

                    // $EditRes = $this->select("users", array("id" => $_GET['userid']),array("city"=>"users.city = city.cityid "));
                    $EditRes = $this->select("users", array("id" => $_GET['userid']));

                    $CitiesData = $this->select("city");

                    include_once("Views/Admindashboard/edituser.php");
                    if (isset($_POST['update'])) {
                        unset($_POST['update']);
                        // echo "<pre>";
                        // print_r($_FILES);
                        // echo "</pre>";
                        if ($_FILES['profile_pic']['error'] == 0) {
                            $profile_pic = $_FILES["profile_pic"]["name"];
                            $target_dir = "Uploads/";
                            $Filename = $target_dir . basename($_FILES["profile_pic"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                            // $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
                            // if ($check !== false) {
                            //     echo "File is an image - " . $check["mime"] . ".";
                            //     $uploadOk = 1;
                            // } else {
                            //     echo "File is not an image.";
                            //     $uploadOk = 0;
                            // }


                            // Check if file already exists
                            // if (file_exists($Filename)) {
                            //     echo "Sorry, file already exists.";
                            //     $uploadOk = 0;
                            // }

                            // Check file size
                            if ($_FILES["profile_pic"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            // if (
                            //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            //     && $imageFileType != "gif"
                            // ) {
                            //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            //     $uploadOk = 0;
                            // }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $Filename)) {

                                    // echo "The file " . htmlspecialchars(basename($_FILES["profile_pic"]["name"])) . " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        } else {

                            $profile_pic = $_REQUEST['old_img'];
                        }
                        // exit;

                        $hobbydata = implode(",", $_POST['hobby']);
                        unset($_POST['old_img']);

                        $Data = array_merge($_POST, array("hobby" => $hobbydata, "profile_pic" => $profile_pic));
                        // echo "<pre>";
                        // print_r($Data);
                        // echo "</pre>";
                        $UpdateRes = $this->update("users", $Data, array("id" => $_GET['userid']));

                        if ($UpdateRes['Code'] == 1) {
                            header("location:allusers");
                        }
                    }




                    break;

                case '/addusers':

                    include_once("Views/Admindashboard/adminheader.php");
                    include_once("Views/Admindashboard/adduser.php");
                    include_once("Views/Admindashboard/adminfooter.php");

                    if (isset($_POST['register'])) {

                        $hobbydata = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        // echo $hobbydata;
                        unset($_POST['hobby']);
                        // echo "<pre>";
                        // print_r($_POST);

                        // echo "</pre>";
                        // exit;
                        $data = array_merge($_POST, array("Hobby" => $hobbydata));
                        $InsertRes = $this->register("users", $data);

                        // echo "<pre>";
                        // print_r($InsertRes);
                        // echo "</pre>";
                        // exit;
                        if ($InsertRes['Code'] == 1) {
                            header("location:allusers");
                        }
                    }
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


$Controller = new Controller;
