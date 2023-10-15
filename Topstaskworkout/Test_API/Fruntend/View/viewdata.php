<?php
//  print_r($_SESSION['Userdata']);
if (!isset($_SESSION['Userdata'])) {
    header("location:login");
}
?>
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
            <tbody>
                <?php
                // print_r($viewuser);

                if (!empty($viewuser['Data'])) {
                    $i = 0;
                    foreach ($viewuser['Data'] as $key => $value) {
                        $i++ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->fullname; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->phone; ?></td>
                            <td><?php echo $value->gender; ?></td>
                            <td><?php echo $value->hobby; ?></td>
                            <td>
                                <a href="edit?userid=<?php echo $value->id; ?>" class="btn btn-primary me-md-2">Edit</a> &nbsp;&nbsp;
                                <a href="delete?userid=<?php echo $value->id; ?>" class="btn btn-danger me-md-2">Delete</a>
                            </td>
                        </tr>
                    <?php   }
                } else {  ?>

                <?php  }
                ?>
            </tbody>




        </table>

</body>

</html>