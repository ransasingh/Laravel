<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </style> -->
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Register</title>
    </head>


    <body>
        <div class="container mt-3 p-3 mb-2 bg-yellow text-dark">
            <div class="text-center">
                <h2><b>Registration Form</b></h2>
            </div>
            <form method="post" class="row g-3">
                <div class="col-md-5 offset-3" class="text-center">
                    <label for="username" class="form-label">User name </label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="col-md-5 offset-3" class="text-center">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-md-5 offset-3" class="text-center">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-5 offset-3" class="text-center">
                    <label for="gender" class="form-label">Gender </label><br>
                    <input type="radio"  name="gender" id="Male" value="Male"><label for="Male">Male</label>
                    <input type="radio"  name="gender" id="female" value="female"><label for="female">Female</label>
                </div>
                <div class="col-md-5 offset-3" class="text-center">
                    <label for="" class="form-label">Hobby </label><br>
                    <input type="checkbox"  name="hobby[]" id="cricket" value="cricket"><label for="cricket">Cricket</label>
                    <input type="checkbox"  name="hobby[]" id="Reading" value="Reading"><label for="Reading">Reading</label>
                    <input type="checkbox"  name="hobby[]" id="Music" value="Music"><label for="Music">Music</label>
                   
                </div>
                <div class="col-md-6 offset-4">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
                <button type="reset" value="Cancel" class="btn btn-danger">Cancel</button>
            </div>
        </div>

    </body>

    </html>