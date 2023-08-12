
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
        <div class="text-center">
            <h2><b>Registration Form</b></h2>
        </div>
        <form method="post" class="row g-2">
            <div class="col-md-6 offset-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname">
            </div>
            <div class="col-md-6 offset-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="col-md-6 offset-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="col-md-6 offset-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" id="male" name="gender" value="male"><label for="male" >Male</label>
                <input type="radio" id="female" name="gender" value="female"><label for="female" >female</label>
            </div>
            <div class="col-md-6 offset-3">
                <label for="" >Hobby</label><br>
                <input type="checkbox" name="Hobby[]"  id="Cricket"  value="Cricket"><label for="Cricket" >Cricket</label>
                <input type="checkbox" name="Hobby[]"  id="Music"  value="Music"><label for="Music" >Music</label>
                <input type="checkbox" name="Hobby[]"  id="Reading"  value="Reading"><label for="Reading" >Reading</label>
               
            </div>
            <div class="col-md-6 offset-4">
              
                <button  type="Submit" name="register" class="btn btn-success">register</button>
                <button  type="Reset" value="Cancel" class="btn btn-danger">Cancel</button>

            </div>
</div>
</body>
</html>
