<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lesson 9</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #search {
                margin-top: 15px;
                margin-bottom: 15px;
            }
            table {
                border-collapse: collapse;
            }
            span {
                color: red;
            }
        </style>
    </head>
    <body>

        <?php
            include_once "connect.php";
        ?>

        <h1>List all users</h1>
        <a href="add.php">Add new user</a><br>

        <div id="search">
            <form method="POST" action="">
                <input type="text" name="txtsearch" value="">
                    <input type="submit" name="search" value="Search">
                    <input type="submit" name="reset" value="Reset"><br><br>

                <?php

                    if (isset($_POST["search"])) {
                        $search = $_POST["txtsearch"];

                        if ($search == "") {
                            echo "<br><span>Please type in the search bar !</span><br>";
                        } else {
                            $sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
                            $query = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($query);

                            if ($count == 0) {
                                echo "<br><span>No result is found !</span><br>";
                            } else {
                                echo "<br><span>Find ". $count . "result !</span><br>";
                            }
                ?>

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

                <?php
                        }

                    } else {
                        include_once "list_users.php";
                    }
                ?>

            </form>
        </div>
    </body>
</html>