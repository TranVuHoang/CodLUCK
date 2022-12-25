<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    require_once './connect.php';

    if (isset($_POST['create_user'])) {
        $name = !empty($_POST['name']) ? trim($_POST['name']) : '';
        $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
        $phone = !empty($_POST['phone']) ? trim($_POST['phone']) : '';
        $username = !empty($_POST['username']) ? trim($_POST['username']) : '';
        $password = !empty($_POST['password']) ? $_POST['password'] : '';
        $retypePassword = !empty($_POST['retype_password']) ? $_POST['retype_password'] : '';
        $errors = [];

        if (empty($name)) {
            $errors['name'] = 'Please type name.';
        }

        if (empty($email)) {
            $errors['email'] = 'Please type email.';
        }

        if (empty($phone)) {
            $errors['phone'] = 'Please type phone.';
        }

        if (empty($username)) {
            $errors['username'] = 'Please type username.';
        }

        if (empty($password)) {
            $errors['password'] = 'Please type password.';
        }

        if (empty($retypePassword)) {
            $errors['retype_password'] = 'Please type retype password.';
        }

        if ($retypePassword != $password) {
            $errors['wrong_password'] = 'Password not match !';
        }

        if (empty($errors)) {
            $sql = 'INSERT INTO `users`(`name`, `email`, `phone`, `username`, `password`)
                    VALUES ("' . $name . '", "' . $email . '", "' . $phone . '",  "' . $username . '",  "' . md5($password) . '")';
            $query = mysqli_query($conn, $sql);

            header('Location: ./lesson9.php');
        }
    }

    if (isset($_POST['cancel'])) {
        header('Location: ./lesson9.php');
    }
    ?>
    <h1>Add new user</h1>
    <form action="" method="post">
        <table cellpadding="10" border="0">
            <tr>
                <td><label for="name">Name <span>*</span></label></td>
                <td>
                    <input type="text" name="name" id="name" value="<?php echo !empty($name) ? $name : ''; ?>"><br />
                    <?php
                    if (!empty($errors['name'])) {
                        echo '<span>' . $errors['name'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email <span>*</span></label></td>
                <td>
                    <input type="text" name="email" id="email" value="<?php echo !empty($email) ? $email : ''; ?>"><br />
                    <?php
                    if (!empty($errors['email'])) {
                        echo '<span>' . $errors['email'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="phone">Phone <span>*</span></label></td>
                <td>
                    <input type="text" name="phone" id="phone" value="<?php echo !empty($phone) ? $phone : ''; ?>"><br />
                    <?php
                    if (!empty($errors['phone'])) {
                        echo '<span>' . $errors['phone'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="username">Username <span>*</span></label></td>
                <td>
                    <input type="text" name="username" id="username" value="<?php echo !empty($username) ? $username : ''; ?>"><br />
                    <?php
                    if (!empty($errors['username'])) {
                        echo '<span>' . $errors['username'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password <span>*</span></label></td>
                <td>
                    <input type="password" name="password" id="password"><br />
                    <?php
                    if (!empty($errors['password'])) {
                        echo '<span>' . $errors['password'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="retype_password">Retype password <span>*</span></label></td>
                <td>
                    <input type="password" name="retype_password" id="retype_password"><br />
                    <?php
                    if (!empty($errors['retype_password'])) {
                        echo '<span>' . $errors['retype_password'] . '</span>';
                    } elseif (!empty($errors['wrong_password'])) {
                        echo '<span>' . $errors['wrong_password'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="create_user" value="Save">
                    <input type="submit" name="cancel" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>