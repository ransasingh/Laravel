<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>

    <div class="container mt-3 p-3 mb-2 bg-blue text-black">
        <div class="text-center"><a href="home">Home</a>
            <h2><b>Registration Form</b></h2>
        </div>
        <form method="post" class="row g-2">
            <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Full name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required>
            </div>
            <div class="col-md-6 offset-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="col-md-6 offset-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="col-md-6 offset-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" minlength="10" maxlength="10" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="col-md-6 offset-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" id="Male" name="gender" value="Male"><label for="Male">Male</label>
                <input type="radio" id="Female" name="gender" value="Female"><label for="Female">female</label>
            </div>
            <div class="col-md-6 offset-3">
                <label for="">Hobby</label><br>
                <input type="checkbox" name="Hobby[]" id="cricket" value="cricket"><label for="cricket">Cricket</label>
                <input type="checkbox" name="Hobby[]" id="music" value="music"><label for="music">Music</label>
                <input type="checkbox" name="Hobby[]" id="reading" value="reading"><label for="reading">Reading</label>

            </div>
            <div class="row mt-3">
                <div class="col-md-6 offset-3">
                    <label for="City">City</label>
                    <select name="City" id="City" class="form-control">
                        <option value="">--Select--</option>
                        <option value="Ahemdabad">Ahemdabad</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Suart">Suart</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 offset-3">
                <label for="profile_pic" class="form-label">Profile_pic</label>
                <input type="File"  class="form-control" name="profile_pic" id="profile_pic" required>
            </div>



            <div class="col-md-6 offset-4">

                <button type="Submit" name="btn-regist" class="btn btn-success">register</button>
                <button type="Reset" value="Cancel" class="btn btn-danger">Cancel</button>

            </div>
    </div>
</body>

</html>