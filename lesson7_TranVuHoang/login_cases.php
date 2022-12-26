<?php
session_start();

echo '<h1>Login</h1>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (empty($_POST['username'])) {
        $errors['required_username'] = "Please type username !";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $errors['required_password'] = "Please type password !";
    } else {
        $password = $_POST['password'];
    }

    if (!empty($errors['required_username'])) {
        echo $errors['required_username'] . '<br/>';
    }

    if (!empty($errors['required_password'])) {
        echo $errors['required_password'] . '<br/>';
    }

    if (empty($errors)) {
        $datas = [
            'username' => 'admin',
            'password' => 123
        ];

        if (($_POST['username'] == $datas['username']) && ($_POST['password'] == $datas['password'])) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $datas['username'];
            $_SESSION['password'] = $datas['password'];
            echo "<p>Login successfully !</p>";
        } else {
            echo "Wrong password or username !";
        }
    }
}
