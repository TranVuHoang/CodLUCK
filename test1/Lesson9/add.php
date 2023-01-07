<?php
    include_once "connect.php";
?>
<style>
    span {
        color: red;
    }
</style>

<h1>Add new user</h1>

<form method="POST" action="">

    <?php
        $err = [];

        if (isset($_POST["save"])) {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $phone = trim($_POST["phone"]);
            $username = trim($_POST["username"]);
            $password = trim($_POST["password"]);
            $r_password = trim($_POST["retypePassword"]);

            $sql = "SELECT * FROM users where username = '$username'";
            $query = mysqli_query($conn, $sql);
            $rows = mysqli_fetch_array($query);

            if (empty($name)) {
                $err['name'] = "Please type retype name.";
            }

            if (empty($email)) {
                $err['email'] = "Please type retype email.";
            }

            if (empty($phone)) {
                $err['phone'] = "Please type retype phone.";
            }

            if (empty($username)) {
                $err['username'] = "Please type retype username.";
            }

            if (!empty($username) && $username == $rows['username'] ) {
                $err['username'] = "Username already exists, please enter another username !";
            }

            if (empty($password)) {
                $err['password'] = "Please type retype password.";
            }

            if (empty($r_password)) {
                $err['r_password'] = "Please type retype password.";
            } elseif ($r_password != $password) {
                $err['r_password'] = "Please type retype password.";
            }

            if (empty($err)) {
                $sql = "INSERT INTO users (username, password, name, email, phone, delete_flg)
                VALUES ('$username', '$password', '$name', '$email', '$phone', 2)";
                $query = mysqli_query($conn, $sql);
                echo "<span><h3>Successfully added new !</h3></span>";
            }
        } else {
            header("location: index.php");
        }

        if (isset($_POST["cancel"])) {
                header("location: index.php");
        }
    ?>

    <table cellpadding = "5" border="0">
        <tr>
            <td>Name <span>*</span> </td>
            <td>
                <input type="text" name="name" value=""><br>

                <?php
                    if (!empty($err['name'])) {
                        echo '<span>'. $err['name'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Email <span>*</span> </td>
            <td>
                <input type="text" name="email" value=""><br>

                <?php
                    if (!empty($err['email'])) {
                        echo '<span>'. $err['email'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Phone <span>*</span> </td>
            <td>
                <input type="number" name="phone" value=""><br>

                <?php
                    if (!empty($err['phone'])) {
                        echo '<span>'. $err['phone'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Username <span>*</span> </td>
            <td>
                <input type="text" name="username" value=""><br>

                <?php
                    if (!empty($err['username'])) {
                        echo '<span>'. $err['username'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Password <span>*</span></td>
            <td>
                <input type="password" name="password" value=""><br>

                <?php
                    if (!empty($err['password'])) {
                        echo '<span>'. $err['password'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Retype Password <span>*</span></td>
            <td>
                <input type="password" name="retypePassword" value=""><br>

                <?php
                    if (!empty($err['r_password'])) {
                        echo '<span>'. $err['r_password'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="save" value="Save">
                <input type="submit" name="cancel" value="Cancel">
            </td>
        </tr>
    </table>
</form>