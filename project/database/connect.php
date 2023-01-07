<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'sell_phones';

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn) {
    $setLang = mysqli_query($conn, 'SET NAMES "utf-8"');
} else {
    die ('Kết nối thất bại'.mysqli_connect_error());
}
?>