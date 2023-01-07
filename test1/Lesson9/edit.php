<?php
    include_once "connect.php";

    $err = [];

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    if (isset($_POST["save"])) {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $password = trim($_POST["password"]);
        $r_password = trim($_POST["retypePassword"]);

        if (empty($name)) {
            $err['name'] = "Please type retype name.";
        }

        if (empty($email)) {
            $err['email'] = "Please type retype email.";
        }

        if (empty($phone)) {
            $err['phone'] = "Please type retype phone.";
        }

        if (!empty($password) && empty($r_password)) {
            $err['r_password'] = "Please type retype password.";
        }

        if ($r_password != $password) {
            $err['r_password'] = "Please type retype password.";
        }

        if (empty($err)) {
            $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone',
            password = '$password' WHERE id = '$id' ";
            $query = mysqli_query($conn, $sql);
            echo "<span><h3>Edit successfully !</h3></span>";
        }
    } else {
        header("location: index.php");
    }

    if (isset($_POST["cancel"])) {
        header("location: index.php");
    }

    $sql = "SELECT * FROM users where id = $id";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($query);
?>

<style>
    span{
        color: red;
    }
</style>

<h1>Edit user</h1>

<form method="POST" action="">
    <table cellpadding = "5" border="0">
        <tr>
            <td>Name <span>*</span> </td>
            <td>
                <input type="text" name="name" value="<?php echo $rows['name']; ?>"><br>

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
                <input type="text" name="email" value="<?php echo $rows['email']; ?>"><br>

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
                <input type="number" name="phone" value="<?php echo $rows['phone']; ?>"><br>

                <?php
                    if (!empty($err['phone'])) {
                        echo '<span>'. $err['phone'] .'</span>';
                    }
                ?>

            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value="<?php echo $rows['username']; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value="">
            </td>
        </tr>
        <tr>
            <td>Retype Password</td>
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