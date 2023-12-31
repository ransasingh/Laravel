<!-- <?php error_reporting(0); ?> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Form</title>
</head>
<a href="allusers">Home</a>


<body>
    <div class="container mt-3 p-3 mb-2 bg-white text-dark">
        <div class="text-center">
            <h2><b>Update Form</b></h2>
        </div>
        <form method="post" enctype="multipart/form-data" class="row g-3">
            <?php
            // echo "<pre>";
            // print_r($EditRes['Data'][0]->Username);
            // echo "</pre>";
            ?>
            <!-- <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Full name</label>
                <input type="text" class="form-control" value="<?php $EditRes['Data'][0]->fullname  ?>" name="fullname" id="fullname" required>
            </div> -->
            <div class="col-md-6 offset-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" value="<?php echo $EditRes['Data'][0]->username; ?>" class="form-control" name="username" id="Username">
            </div>
            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo $EditRes['Data'][0]->email; ?>" name="email" class="form-control" id="email">
            </div>

            <div class="col-md-6 offset-3">
                <label for="Gender">Gender</label><br>
                <?php //echo $EditRes['Data'][0]->Gender 
                ?>
                <input type="radio" name="Gender" id="Male" value="Male" <?php if ($EditRes['Data'][0]->Gender == 'Male') {
                                                                                echo "checked";
                                                                            } ?>><label for="Male">Male</label>
                <input type="radio" name="Gender" id="Female" value="Female" <?php if ($EditRes['Data'][0]->Gender == 'Female') {
                                                                                    echo "checked";
                                                                                } ?>><label for="Female">Female</label>
            </div>

            <div class="col-md-6 offset-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text" value="<?php echo $EditRes['Data'][0]->phone; ?>" name="phone" class="form-control" id="phone">
            </div>
            <div class="col-md-6 offset-3">
                <label for="">Hobby</label><br>
                <?php
                $hobbyData = explode(",", $EditRes['Data'][0]->Hobby);
                // echo "<pre>";
                // print_r($hobbyData) ;
                // echo "</pre>";
                ?>

                <input type="checkbox" name="hobby[]" id="cricket" value="cricket" <?php if (in_array("cricket", $hobbyData)) {
                                                                                        echo "checked";
                                                                                    } ?>><label for="cricket">cricket</label>
                <input type="checkbox" name="hobby[]" id="music" value="music" <?php if (in_array("music", $hobbyData)) {
                                                                                    echo "checked";
                                                                                } ?>><label for="music">music</label>
                <input type="checkbox" name="hobby[]" id="reading" value="reading" <?php if (in_array("reading", $hobbyData)) {
                                                                                        echo "checked";
                                                                                    } ?>><label for="reading">reading</label>

            </div>
            <div>
                <div class="col-md-6 offset-3">
                    <label for="">City:</label>
                    <?php

                    // echo "<pre>";
                    // print_r($EditRes['Data'][0]->City);
                    // echo "</pre>";
                    // echo "<pre>";
                    // print_r($CitiesData['Data']);
                    // echo "</pre>";


                    ?>
                    <select class="form-control" name="City" id="City" class="form-control">

                        <option value="checked">Select City</option>


                        <?php foreach ($CitiesData['Data'] as $key => $value) {

                        ?>

                            <option <?php if ($EditRes['Data'][0]->City == $value->cityid) {
                                        echo "selected";
                                    } ?> value="<?php echo  $value->cityid; ?>"><?php echo $value->cityname; ?></option>
                        <?php }
                        ?>
                    </select>

                </div>
                <div class="col-md-6 offset-3">
                    <label for="Prof_pic" class="form-label">profile_pic</label>
                    <input type="File" value="<?php echo $EditRes['Data'][0]->profile_pic; ?>" class="form-control" name="profile_pic" id="profile_pic">
                    <img src="Uploads/<?php echo $EditRes['Data'][0]->profile_pic; ?>" width="100px" height="100px" alt="Image Not Found">
                    <input type="hidden" name="old_img" value="<?php echo $EditRes['Data'][0]->profile_pic; ?>">
                </div>


                <div class="col-md-6 offset-4">
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                    <button type="reset" value="Cancel" class="btn btn-danger">Cancel</button>
                </div>

        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>