<?php
session_start();
ob_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<h2>Login</h2>';

    $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $password = !empty($_POST['password']) ? trim($_POST['password']) : '';

    $errors = [];

    if (empty($username)) {
        $errors['username'] = 'Please type username !';
    } else {
        if (empty($password)) {
            $errors['password'] = 'Please type password !';
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    } else {
        if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {
            if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
                echo 'Login successfully !';
            } else {
                echo 'Wrong password or username !';
            }
        } else {
            echo 'Wrong password or username !';
        }
    }
} else {
    header('Location: ./login.php');
}