<?php
    include_once "connect.php";

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $sql = "SELECT * FROM users where id = $id";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($query);
?>
<h1>User's info</h1>
<table cellpadding = "5">
    <tr>
        <td>Name: </td>
        <td><?php echo $rows['name']; ?></td>

    </tr>
    <tr>
        <td>Username: </td>
        <td><?php echo $rows['username']; ?></td>

    </tr>
    <tr>
        <td>Email: </td>
        <td><?php echo $rows['email']; ?></td>
    </tr>
    <tr>
        <td>Phone: </td>
        <td><?php echo $rows['phone']; ?></td>
    </tr>
</table>
<br><a href="index.php">Back to list users</a>