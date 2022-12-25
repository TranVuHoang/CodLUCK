<?php
require_once './connect.php';

if (isset($_GET['id'])) {
    $id = !empty($_GET['id']) ? $_GET['id'] : '';
    $sql = 'SELECT * FROM users WHERE `id` = ' . $id;
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($query);


    echo '<h1>Delete user</h1>';

    echo 'Do you want to delete '.$rows['username'];
    echo '<button >Agree</button>';
} else {
    echo 'Không được phép truy cập trang này trái phép';
}
