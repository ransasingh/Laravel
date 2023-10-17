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

                <h2><b>Registration</b></h2>
            </div>
            <form method="post" id="formdata" class="row g-2">
                <div class="col-md-6 offset-3">
                    <label for="fullname" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname">
                </div>
                <div class="col-md-6 offset-3">
                    <label for="username" class="form-label">User name</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="col-md-6 offset-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-md-6 offset-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-6 offset-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="numeric" class="form-control" name="phone" id="phone">
                </div>
                <div class="col-md-6 offset-3">
                    <label for="gender" class="form-label">Gender</label><br>
                    <input type="radio" id="Male" name="gender" value="Male"><label for="Male">Male</label>
                    <input type="radio" id="Female" name="gender" value="Female"><label for="Female">female</label>
                </div>
                <div class="col-md-6 offset-3">
                    <label for="hobby" class="form-label">Hobby</label><br>
                    <label for="cricket">Cricket</label>
                    <input type="checkbox" id="cricket" name="hobby[]" value="cricket">
                    <label for="Reading">Reading</label>
                    <input type="checkbox" id="Reading" name="hobby[]" value="Reading">
                    <label for="Dancing">Dancing</label>
                    <input type="checkbox" id="Dancing" name="hobby[]" value="Dancing">

                </div>
                <div class="col-md-6 offset-3">
                    <button type="submit" name="register" id="register" class="btn btn-primary">Regisrer</button>
                    <button type="reset" name="cancel" id="cancel" class="btn btn-danger">Cancel</button>

                </div>

                <div class="col-md-6 offset-3">

                </div>




            </form>

        </div>
        
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
   $("#formdata").on("submit", function(e) {
            e.preventDefault();
        // console.log(e.target);
        var result = {};
            $.each($('#formdata').serializeArray(), function() {
                console.log(this);
                result[this.name] = this.value;

                

                
            });
            // console.log(result);
            hobbylist="";
            $('input[type=checkbox]').each(function() {
                if (this.checked) {
                    hobbylist += $(this).val() + ",";
                }
                //  console.log(hobbylist);

            });

            hobbylist = hobbylist.substring(0, (hobbylist.length - 1));
            console.log(hobbylist);
            result['hobby'] = hobbylist
           
        


    })
    

</script>
</body>
</html>