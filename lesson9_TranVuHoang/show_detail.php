<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <?php
    require_once './connect.php';

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
    ?>
        <h1>User's info</h1>
        <table cellpadding="10">
            <tr>
                <td>Name:</td>
                <td><?php echo $row['name'] ?></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><?php echo $row['username'] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><?php echo $row['phone'] ?></td>
            </tr>
        </table>
        <a href="./lesson9.php">Back to list users</a>
    <?php
    } else {
        echo 'No user exists yet !';
    }
    ?>
</body>

</html>