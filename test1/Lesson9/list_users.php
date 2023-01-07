<table cellpadding = "2" border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Username</th>
        <th rowspan="1" colspan="3">Action</th>
    </tr>

    <?php
        $i = 0;
        $sql = "SELECT * FROM users where delete_flg != 1";
        $query = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_array($query)) {
            $i++;
    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['phone']; ?></td>
        <td><?php echo $rows['username']; ?></td>
        <td><a href="detail.php?id=<?php echo $rows['id']; ?>">Detail</a></td>
        <td><a href="edit.php?id=<?php echo $rows['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
    </tr>

    <?php } ?>
</table>