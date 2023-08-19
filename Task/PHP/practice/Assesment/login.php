<?php
// session_start();
include("Header.php");

if (isset($_POST['login'])) {
    
    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";   
    if ($_COOKIE['username'] == $_REQUEST['username'] && $_COOKIE['password'] == $_REQUEST['password']) {
        echo "login success";
        // $_SESSION['Data'] = "ABC";
        $_SESSION['UserData'] = array("username"=>$_REQUEST['username'],"password"=>$_REQUEST['password']);
        header("location:home.php");
     
    }else{
        echo "Invalid user";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <div class="container">
<div class="row mt-5">
        <div class="col-4 offset-4">
            <div class="card">
                <div class="card-header text-center"><h3>Login</h3></div>
                <form method="post" >
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username" required  >
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password"  required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" name="login" id="login">
                            <input type="reset" class="btn btn-danger" name="reset" value="Cancel" id="reset">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <a href="registration.php">Click here for ceate new account</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>