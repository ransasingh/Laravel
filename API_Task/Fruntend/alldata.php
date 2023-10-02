<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
   <div class="container">
    <table class="table table-bordered">
        <h3 class="text-center mt-3">all Data</h3>
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody id="alldata">

        </tbody>
    </table>
    <script>
        async function getdata() {
            const response = await fetch("http://localhost/Laravel/API_Task/Backend/data");
            // console.log(response)
            const data = await response.json();
            // console.log(data.Data);
            let Htmllist =""
            data.Data.forEach(element => {
                console.log(element);
                Htmllist += `<tr><td>${element.fullname}</td>
                <td>${element.email}</td>
                <td>${element.phone}</td>
                <td>${element.Gender}</td>
                
                </tr>`

                
            });
            document.getElementById("alldata").innerHTML = Htmllist

        }
        getdata();
    </script>





</div>
</body>

</html>