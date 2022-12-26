<?php
session_start();

echo '<h2>Register</h2>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (empty(trim($_POST['username']))) {
        $errors = 'Please type username !';
    } else {
        if (empty(trim($_POST['password']))) {
            $errors = 'Please type password !';
        } else {
            if (empty(trim($_POST['retype_password']))) {
                $errors = 'Please retype password !';
            } else {
                if (trim($_POST['password'] != trim($_POST['retype_password']))) {
                    $errors = 'Password not match, please try again !';
                }
            }
        }
    }

    if (!empty($errors)) {
        echo $errors;
    } else {
        // $_SESSION['username'] = trim($_POST['username']);
        // $_SESSION['password'] = trim($_POST['password']);
        echo 'Register successfully ! <br>';
        echo '<a href="login.php">Login</a>';
    }
}
