<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Login:</h1>
    <form action="./login_cases.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <div class="btn-login">
            <a href="./register.php">Create new account</a><br>
            <button type="submit" class="btn btn-lg btn-info">Login</button>
        </div>
    </form>
</body>

</html>