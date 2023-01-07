<?php
    include_once "connect.php";

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $sql = "SELECT * FROM users where id = '$id' ";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($query);

    if (isset($_POST["agree"])) {
        $sql = "UPDATE users SET delete_flg = 1 WHERE id = '$id' ";
        $query = mysqli_query($conn, $sql);
        header("location: index.php");
    } else {
        header("location: index.php");
    }

    if (isset($_POST["cancel"])) {
        header("location: index.php");
    }
?>

<style>
    span {
        color: red;
    }
</style>
<h1>Delete user</h1>
<form method="POST" action="">
    <p>
        Do you want to delete <span><b><?php echo $rows['name']; ?></b></span> ?
    </p><br>
    <input type="submit" name="agree" value="Agree">
    <input type="submit" name="cancel" value="Cancel">
</form>
