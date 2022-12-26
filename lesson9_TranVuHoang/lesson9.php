<?php
require_once './connect.php';

if (isset($_POST['search_user'])) {
    $search = !empty($_POST['search']) ? $_POST['search'] : '';
    $sql = "SELECT * FROM `users`
            WHERE delete_flg != 1
            AND (name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%' OR username LIKE '%$search%')";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if ($count <= 0) {
        echo 'No search results found.';
        echo '<button><a href="./lesson9.php">back</a></button>';
    } else {
?>
        <link rel="stylesheet" href="./style.css">
        <h1>List User</h1>
        <p>
            <a href="create.php">Add new user</a>
        </p>
        <form action="" method="post">
            <p>
                <input type="text" name="search" id="search">
                <input type="submit" name="search_user" value="Search">
                <input type="submit" name="reset_home" value="Reset">
            </p>
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
    <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <h1>List User</h1>
        <p>
            <a href="create.php">Add new user</a>
        </p>
        <form action="" method="post">
            <p>
                <input type="text" name="search" id="search">
                <input type="submit" name="search_user" value="Search">
                <input type="submit" name="reset_home" value="Reset">
            </p>
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
<?php
}
?>