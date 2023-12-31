<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>

  <div class="container mt-3 p-3 mb-2 bg-blue text-black">
    <div class="text-center">
      <h2><b>Register</b></h2>
    </div>
    <form method="post" class="row g-2">
      <div class="col-md-6 offset-3">
        <label for="fullname" class="form-label">fullname</label>
        <input type="text" class="form-control" name="fullname" id="fullname">
      </div>
      <div class="col-md-6 offset-3">
        <label for="fullname" class="form-label">User name</label>
        <input type="text" class="form-control" name="username" id="fullname">
      </div>

      <div class="col-md-6 offset-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <div class="col-md-6 offset-3">
        <button type="Submit" name="register" id="register" class="btn btn-success">Register</button>
        <button type="Submit" name="Cancel" id="Cancel" class="btn btn-danger">Cancel</button>
        
      </div>

      <div class="col-md-6 offset-3">

      </div>




    </form>

  </div>