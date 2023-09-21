<?php
require_once("header.php");

if (isset($_POST['btn-login'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // // if ($_POST['username'] != "" || $_POST['password'] != "" || $_POST['email'] != "") {
    // if ($_POST['username'] != "" && $_POST['password'] != "" && $_POST['email'] != "") {
        setcookie("username",$_POST['username'], time()+1*60*60);
        setcookie("password",$_POST['password'], time()+1*60*60);
        setcookie("email",$_POST['email'], time()+1*60*60);
    // }else{
    //     echo "User Name is required";
    // }
}
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="username" placeholder="Enter User Name" id="username" require>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" id="password" require>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" require>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-success" name="btn-login" value="Login" id="btn-login">
                                <input type="reset" class="btn btn-danger" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
