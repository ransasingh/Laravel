<?php
include "header.php";
if (isset($_POST['submit'])) {

    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    // echo time();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer form</title>
</head>

<body>
    <form method="post">

        <div class="container">
            <h1 id="form_header">Customer form</h1>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>

                <input name="fname" size="30" type="text" required />
            </div>
            <div class=container>

                <label>Last Name :</b></label><br>
                <input name="lname" size="30" type="text" required />
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Gender :</label>
            </div>

            <div class="flex-container-radio">
                <div class="container">

                    <input type="radio" name="gender" value="male" id="male-radio" checked>

                    <label id="radio-label" for="male-radio"><span class="radio">Male</span></label>
                </div>

                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">

                    <label id="radio-label" for="female-radio"><span class="radio">Female</span></label>
                </div>

                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">

                    <label id="radio-label" for="other-radio"><span class="radio">Others</span></label>
                </div>
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Date of Birth :</label><br>

                <input name="dob" size="30" type="text" placeholder="mm-dd-yyyy" required />
            </div>
        </div>

        <div class="flex-container">

            <div class=container>
                <label>Aadhar No :</label><br>
                <input name="aadhar" size="25" type="text" required />
            </div>

        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>

                <input name="email" size="30" type="text" required />
            </div>
            <div class=container>

                <label>Phone No. :</b></label><br>
                <input name="phone" size="30" type="text" required />
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>

                <textarea name="address" required /></textarea>
            </div>
        </div>

        <div class="flex-container">

            <div class=container>
                <label>Bank Branch :</label>
            </div>
            <div class=container>

                <select name="branch">
                    <option value="Select">select</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Paladi">Paladi</option>

                    <option value="Thaltej">Thaltej</option>
                    <option value="Sarkhej">Sarkhej</option>

                    <option value="Sola road">Sola road</option>
                </select>
            </div>
        </div>
        <div class=container>
            <label>Account Type :</label>
        </div>
        <div class=container>

            <select name="Type">
                <option value="Select">select</option>
                <option value="Saving Account">Saving Account</option>
                <option value="Cuurent Account">Cuurent Account</option>




            </select>
        </div>
        </div>

        <div class="flex-container">

            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="25" type="text" required />
            </div>


        </div>

        <div class="flex-container">
            <div class=container>
                <label>Opening Balance :</label><br>

                <input name="o_balance" size="20" type="text" required />
            </div>
            <div class=container>
                <label>PIN(4 digit) :</b></label><br>

                <input name="pin" size="15" type="password" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>

                <label>Username :</label><br>
                <input name="cus_uname" size="30" type="text" required />
            </div>

            <div class=container>
                <label>Password :</b></label><br>
                <input name="cus_pwd" type="password" required />
            </div>
        </div>


        <div class="flex-container">
            <div class="container">
                <button type="submit" name="submit">Submit</button>
            </div>


            <div class="container">
                <button type="reset" class="reset">Reset</button>
            </div>
        </div>

    </form>

</body>

</html>