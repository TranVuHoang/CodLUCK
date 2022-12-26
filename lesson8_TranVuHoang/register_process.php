<?php
include_once './connect_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<h2>Register:</h2>';

    $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $password = !empty($_POST['password']) ? md5(trim($_POST['password'])) : '';
    $retypePassword = !empty($_POST['retype_password']) ? md5(trim($_POST['retype_password'])) : '';

    $errors = [];

    if (empty($username)) {
        $errors = 'Please type username !';
    } elseif (empty($password)) {
        $errors = 'Please type password !';
    } elseif (empty($retypePassword)) {
        $errors = 'Please retype password !';
    } elseif ($password != $retypePassword) {
        $errors = 'Password not match, please try again !';
    } else {
        $errors = '';
    }

    if (empty($errors)) {
        echo 'Register successfully !<br>';
        echo '<a href="lesson8.php">Login</a>';

        $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";
        $sql = mysqli_query($conn, $sql);
    } else {
        echo $errors;
    }
} else {
    echo 'Please register account !';
}
