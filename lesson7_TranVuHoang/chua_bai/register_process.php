<?php
session_start();

echo '<h2>Register</h2>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $password = !empty($_POST['password']) ? trim($_POST['password']) : '';
    $retypePassword = !empty($_POST['retype_password']) ? trim($_POST['retype_password']) : '';

    $registeredUsernames = [];
    $errors = [];

    if (empty($username)) {
        $errors['username'] = 'Please type username !';
    } else {
        if (empty($password)) {
            $errors['password'] = 'Please type password !';
        } else {
            if (empty($retypePassword)) {
                $errors['retype_password'] = 'Please retype password !';
            } else {
                if ($password != $retypePassword) {
                    $errors = 'Password not match, please try again !';
                }
            }
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    } else {
        // Kiểm tra xem tên người dùng có trùng với tên người dùng đã đăng ký hay không
        if (in_array($username, $registeredUsernames)) {
            echo 'Username already exists, please choose another one !';
        } else {
            // Thêm tên người dùng vào mảng
            $registeredUsernames[] = $username;

            // Lưu thông tin người dùng vào biến SESSION
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            echo 'Register successfully ! <br>';
            echo '<a href="login.php">Login</a>';
        }
    }
} else {
    header('Location: ./register.php');
}