<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" name="email" placeholder="onkeyup" onkeyup="checkemail(this)" id="email">
    <span id="emailErrror"></span>
    <Button id="btn">Click</Button>
    <script>
        async function checkemail(e) {

            // console.log(e);
            console.log(e.value);
            // let checkdatabyemail = await fetch("http://localhost/Laravel/API_Task/Backend/checkemail?email="+e.value)
            // let userDataByemailRes = await checkdatabyemail.json()
            // console.log(userDataByemailRes);

            let checkdatabyemail = await fetch(`http://localhost/Laravel/API_Task/Backend/checkemail?email=${e.value}`)
            let userDataByemailRes = await checkdatabyemail.json()
            console.log(userDataByemailRes);
            if (userDataByemailRes.Code == 1) {

                document.getElementById("emailErrror").innerHTML = "Email already exists"
                document.getElementById("btn").disabled = true;
            } else {

                document.getElementById("emailErrror").innerHTML = "valid"

                document.getElementById("btn").disabled = false;
            }




        }
    </script>
</body>

</html>