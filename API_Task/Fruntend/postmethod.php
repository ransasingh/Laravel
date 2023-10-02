<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <input type="text" name="" id=""> -->
    <script>
        fetch(`http://localhost/Laravel/API_Task/Backend/checkpostmethod`,
            {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify({ a: 1, b: 2 })
            })
            .then(function (res) { console.log(res) })
            .catch(function (res) { console.log(res) })
    </script>
</body>

</html>