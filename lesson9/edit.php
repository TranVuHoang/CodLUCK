<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    require_once './connect.php';

    if (isset($_GET['id'])) {
        $id = !empty($_GET['id']) ? $_GET['id'] : '';
    } else {
        header('Location: ./lesson9.php');
    }

    $sql = 'SELECT * FROM users WHERE `id` = ' . $id;
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($query);

    if (isset($_POST['edit_user'])) {
        $name = !empty($_POST['name']) ? trim($_POST['name']) : '';
        $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
        $phone = !empty($_POST['phone']) ? trim($_POST['phone']) : '';
        $password = !empty($_POST['password']) ? ($_POST['password']) : '';
        $retypePassword = !empty($_POST['retype_password']) ? ($_POST['retype_password']) : '';
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

        if (!empty($password) && empty($retypePassword)) {
            $errors['retype_password'] = 'Please retype password.';
        }

        if ($retypePassword != $password) {
            $errors['wrong_password'] = 'Password not match !';
        }

        if (empty($errors)) {
            $sql = 'UPDATE `users`
                    SET `name` = "' . $name . '", `email` = "' . $email . '", `phone` = "' . $phone . '", `password` = "' . md5($password) . '"
                    WHERE `id` =' . $id;
            $query = mysqli_query($conn, $sql);

            header('Location: ./lesson9.php');
        }
    }

    if (isset($_POST['cancel'])) {
        header('Location: ./lesson9.php');
    }
    ?>
    <h1>Edit user</h1>
    <form action="" method="post">
        <table cellpadding="10" border="0">
            <tr>
                <td><label for="name">Name <span>*</span></label></td>
                <td>
                    <input type="text" name="name" id="name" value="<?php echo $rows['name']; ?>"><br />
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
                    <input type="text" name="email" id="email" value="<?php echo $rows['email']; ?>"><br />
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
                    <input type="text" name="phone" id="phone" value="<?php echo $rows['phone']; ?>"><br />
                    <?php
                    if (!empty($errors['phone'])) {
                        echo '<span>' . $errors['phone'] . '</span>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>
                    <input type="text" name="username" id="username" value="<?php echo $rows['username']; ?>" disabled><br />
                </td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>
                    <input type="password" name="password" id="password" value="<?php echo !empty($password) ? $password : ''; ?>"><br />
                </td>
            </tr>
            <tr>
                <td><label for="retype_password">Retype password</label></td>
                <td>
                    <input type="text" name="retype_password" id="retype_password"><br />
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
                    <input type="submit" value="Save" name="edit_user">
                    <input type="submit" value="Cancel" name="cancel">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>