<?php
require_once './connect.php';

if (isset($_GET['id'])) {
    $id = !empty($_GET['id']) ? $_GET['id'] : '';
} else {
    header('Location: ./lesson9.php');
}

$sql = 'SELECT * FROM users WHERE `id` = ' . $id;
$query = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($query);

if (isset($_POST['delete_user'])) {
    if (is_numeric($id)) {
        $sql = 'UPDATE users SET delete_flg = 1 WHERE id =' . $id;
        $query = mysqli_query($conn, $sql);

        header('Location: ./lesson9.php');
    } else {
        echo "ID không hợp lệ";
    }
}

if (isset($_POST['cancel'])) {
    header('Location: ./lesson9.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Delete user</h1>
    <form action="" method="post">
        <p>Do you want to delete <span><?php echo $rows['username']; ?></span> ?</p>
        <p>
            <input type="submit" name="delete_user" value="Agree" />
            <input type="submit" name="cancel" value="Cancel" />
        </p>
    </form>
</body>

</html>