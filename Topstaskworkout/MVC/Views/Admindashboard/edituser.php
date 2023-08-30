<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Add User</title>

</head>

<body><h2><a href="Admindashboard">Home</a></h2>

    <main>
        <form method="post">
            <h1>Add User</h1>
            <div>
                <label for="fullname">User name:</label>
                <input type="text" name="fullname" id="fullname" value="">
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
          <div>
            <label for="Gender">Gender:</label>
            <input type="radio" name="Gender" id="male" value="male"><label for="male">Male</label>
            <input type="radio" name="Gender" id="female" value="female"><label for="female">Female</label>
          </div>
            
            <div>
                <label for="phone">Phone:</label>
                <input type="tel" minlength="10" maxlength="10" name="phone" id="phone" value="">
            </div>
            <button type="submit" name="update">Update</button>

        </form>
    </main>
</body>

</html>