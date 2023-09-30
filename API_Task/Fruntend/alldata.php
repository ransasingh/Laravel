<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <table>
        <h3>all Data</h3>
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
    </table> -->
    <script>
        async function getdata() {
            const response = await fetch("http://localhost/Laravel/API_Task/Backend/data");
            console.log(response)
            const data = await response.json();
            console.log(data);
        }
        getdata();
    </script>






</body>

</html>