<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    ob_start();
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location: ./register_errors.php");
    }
    ?>
    <h1>Register:</h1>
    <form action="./register_cases.php" method="post" class="register">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <label for="retype-password">Retype password:</label>
        <input type="password" name="retype-password" id="retype-password"><br>

        <div class="btn-register">
            <button type="submit" name="btn-register">Register</button>
        </div>
    </form>
</body>

</html>