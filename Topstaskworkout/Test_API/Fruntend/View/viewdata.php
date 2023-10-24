
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all</title>
</head>

<body>
    <table>
        <h3 class="text-center ">All Users</h3>
        <table class="table table-success table-striped">
            <thead>

                <th>Sno</th>
                <th>Fullname</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Action</th>

            </thead>
            <tbody id="showdata">

            </tbody>
        </table>
        <script>
            function selectalldata() {
                // console.log("call");
                fetch(`http://localhost/Laravel/Topstaskworkout/Test_API/backend/viewapidata`).then((res) => res.json()).then((responce) => {
                    // console.log(responce);
                    var Htmlres = ""
                    responce.Data.forEach(element => {
                    // console.log(element);
                        // console.log(element.fullname);
                        Htmlres +=`<tr>
                        <td>${element.id}</td>
                        <td>${element.fullname}</td>
                        <td>${element.username}</td>
                        <td>${element.email}</td>
                        <td>${element.phone}</td>
                        <td>${element.gender}</td>
                        <td>${element.hobby}</td>
                        <td>
            
                        </td>
                        </tr>`
                    });
                    document.getElementById("showdata").innerHTML = Htmlres

                })
            }
            selectalldata();
        </script>
</body>

</html>