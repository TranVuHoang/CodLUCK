<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <h1>List User</h1>
    <p>
        <a href="create.php">Add new user</a>
    </p>
    <form action="" method="post">
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once './connect.php';

                $sql = 'SELECT * FROM `users` WHERE delete_flg != 1';
                $query = mysqli_query($conn, $sql);
                $index = 0;

                while ($row = mysqli_fetch_array($query)) {
                    $index++;
                ?>
                    <tr>
                        <td><?php echo $index; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><a href="./show_detail.php?id=<?php echo $row['id'] ?>">Detail</a></td>
                        <td><a href="./edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                        <td><a href="./delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>