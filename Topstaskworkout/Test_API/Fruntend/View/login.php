<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>
    <div class="text-right">




        <div class="container mt-3 p-3 mb-2 bg-blue text-black">

            <div class="text-center">

                <h2><b>Login</b></h2>
            </div>
            <form method="post" id="formlogin" class="row g-2">
                <div class="col-md-6 offset-3">
                    <label for="username" class="form-label">User name</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="col-md-6 offset-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-md-6 offset-3">
                <input type="submit" value="Login" class="btn btn-success" name="login" id="login">
                <a href="register" array_splice>click here to new Registration</a>    
            </div>
                
                <div class="col-md-6 offset-3">
              
                </div>




            </form>
           

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


        <script>
           document.getElementById("formlogin").addEventListener("submit",function(e){
            e.preventDefault();
            // console.log(e.target.email.value);
            let usernamebyid =e.target.username.value
            let Passwordbyid =e.target.password.value
            // console.log(usernamebyid);
            // console.log(Passwordbyid);
            fetch(`http://localhost/laravel/Topstaskworkout/Test_API/Backend/loginapi?username=${usernamebyid}&password=${Passwordbyid}`,{
                method: "POST", // *GET, POST, PUT, DELETE, etc.
                mode: "cors", // no-cors, *cors, same-origin
                cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
                credentials: "same-origin", // include, *same-origin, omit
                headers: {
                    "Content-Type": "application/json",
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                redirect: "follow", // manual, *follow, error
                referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                body: JSON.stringify({
                    username:usernamebyid,
                    password:Passwordbyid
                }),

            }).then((res)=>res.json()).then((responce)=>{
                console.log(responce);
                // alert('Login Success');
                // window.location.href='viewallusers.php';
                
            })
                    
        })
        </script>
    </div>
</body>


</html>