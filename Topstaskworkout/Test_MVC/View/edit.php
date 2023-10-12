<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
</head>

<body>

    <div class="container mt-2">
        <h3 class="text-center ">Update User</h3>
        <form method="post" class="row g-3">
            <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Username</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $Viewuser['Data'][0]->fullname; ?>">
            </div>
            <div class="col-md-6 offset-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $Viewuser['Data'][0]->username; ?>">
            </div>

            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $Viewuser['Data'][0]->email; ?>">
            </div>

            <div class="col-md-6 offset-3">
                <label for="phone" class="form-label">Phone No</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $Viewuser['Data'][0]->phone; ?>">
            </div>
            <div class="col-md-6 offset-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" name="gender" id="Male" value="Male" <?php if ($Viewuser['Data'][0]->gender == "Male") {
                                                                                echo "checked";
                                                                            } ?>><label for="Male">Male</label>
                <input type="radio" name="gender" id="Female" value="Female" <?php if ($Viewuser['Data'][0]->gender == "Female") {
                                                                                    echo "checked";
                                                                                } ?>><label for="Female">Female</label>
            </div>
            <div class="col-md-6 offset-3">
                <?php
                // echo   $Viewuser['Data'][0]->hobby;
                $HobbyData = explode(",", $Viewuser['Data'][0]->hobby);
                // echo "<pre>";
                // print_r($HobbyData);
                ?>
                <label for="hobby" class="form-label">Hobby</label><br>
                <input type="checkbox" name="hobby[]" id="cricket" value="cricket" <?php if (isset($Viewuser['Data'])) {
                                                                                        if (in_array("cricket", $HobbyData)) {
                                                                                            echo "Checked";
                                                                                        }
                                                                                    } ?>><label for="Cricket">Cricket</label>
                <input type="checkbox" name="hobby[]" id="Reading" value="Reading" <?php if (isset($Viewuser['Data'])) {
                                                                                    if (in_array("Reading", $HobbyData)) {
                                                                                        echo "Checked";
                                                                                    }
                                                                                } ?>><label for="Music">Reading</label>
                <input type="checkbox" name="hobby[]" id="Dancing" value="Dancing" <?php if (isset($Viewuser['Data'])) {
                                                                                        if (in_array("Reading", $HobbyData)) {
                                                                                            echo "Checked";
                                                                                        }
                                                                                    } ?>><label for="Reading">Dancing</label>
            </div>



            <div class="col-md-6 offset-3">
                <input type="submit" value="Update"  class="btn btn-success" name="update" id="update">
            </div>
        </form>
    </div>
</body>

</html>