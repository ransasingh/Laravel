
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
                    console.log(responce);

                })
            }
        </script>
</body>

</html>