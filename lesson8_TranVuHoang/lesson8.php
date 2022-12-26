<?php
require_once './connect_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
    $password = !empty($_POST['password']) ? md5(trim($_POST['password'])) : '';

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    $errors = [];

    if (empty($username)) {
        $errors['username'] = 'Please type username !';
    }

    if (empty($password)) {
        $errors['password'] = 'Please type password !';
    }
}
?>
<h1>Login:</h1>
<form action="" method="post">
    <table>
        <tr>
            <td><label for="username">Username:</label></td>
            <td>
                <input type="text" name="username" id="username">
                <span>
                    <?php
                    if (!empty($errors['username']))
                        echo $errors['username'];
                    ?>
                </span>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td>
                <input type="password" name="password" id="password">
                <span>
                    <?php
                    if (!empty($errors['password']))
                        echo $errors['password'];
                    ?>
                </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="register.php">Create new account</a></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>

<style>
    span {
        color: red;
    }
</style>