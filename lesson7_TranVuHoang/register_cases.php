<?php
session_start();

echo '<h1>Register</h1>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (empty($_POST['username'])) {
        $errors['username'] = "Please type username !";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $errors['password'] = "Please type password !";
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['retype-password'])) {
        $errors['retype-password'] = "Please retype password !";
    } else {
        $retypePassword = $_POST['retype-password'];
    }

    if (!empty($_POST['retype-password']) && !empty($_POST['password'])) {
        if ($_POST['password'] != $_POST['retype-password']) {
            $errors = "Password not match, please try again !";
        } else {
            $retypePassword = $_POST['retype-password'];
        }
    }

    if (!empty($errors['username'])) {
        echo $errors['username'] . '<br/>';
    }

    if (!empty($errors['password'])) {
        echo $errors['password'] . '<br/>';
    }

    if (!empty($errors['retype-password'])) {
        echo $errors['retype-password'] . '<br/>';
    }

    if (empty($errors)) {
        echo "<p>Register successfully !</p>";
        echo '<a href="./lesson7.php">Login</a>';
    }
}
