<?php
include("header.php");
if (isset($_POST['btn-submit'])) {

    // echo "<pre>";
    // print_r($_POST);
    // echo time();
    setcookie("username",$_POST['username']);
    setcookie("username",$_POST['username'],time()+1*60*60);
    setcookie("password",$_POST['password'],time()+1*60*60);
    setcookie("email",$_POST['email'],time()+1*60*60);
    header("location:login.php");
    // echo "</pre>";
}
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="btn-submit" id="">
                                <input type="reset" class="btn btn-danger" name="reset" id="">
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