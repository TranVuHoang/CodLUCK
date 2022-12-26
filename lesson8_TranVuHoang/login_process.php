<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<h2>Login:</h2>';
    echo '<p>Login successfully !</p>';
} else {
    echo 'Please login account !';
}
