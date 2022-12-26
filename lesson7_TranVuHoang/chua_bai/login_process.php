<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<h2>Login</h2>';

    // Khai báo biến $username
    # Cách 1 dùng if else

    if (!empty($_POST['username'])) {
        $username = trim($_POST['username']);
    } else {
        $username = '';
    }

    #Cách 2 dùng toán tử 3 ngôi

    $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $password = !empty($_POST['password']) ? trim($_POST['password']) : '';


    if (empty($username)) {
        echo 'Please type username !';
    } else {
        if (empty($password)) {
            echo 'Please type password !';
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
    }
} else {
    echo 'Bạn cần đăng nhập !';
}
