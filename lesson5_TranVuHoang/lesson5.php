<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>List of customers</h1>
    <hr />
    <h4>Customer A</h4>
    <?php
    require_once './data_config.php';
    require_once './functions.php';

    ?>
    <ul>
        <?php
        foreach ($customerA as $key => $value) {
            if ($key == 0) {
                echo '<li><strong>Serie A</strong>: Core: ' . $value['core'] . ', Ram: ' . $value['ram'] . ', Disk: SSD ' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$';
            }

            if ($key == 1) {
                echo '<li><strong>Ram: </strong>' . $value['ram'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }

            if ($key == 2) {
                echo '<li><strong>Version: </strong>' . $value['version'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }
        }
        ?>
    </ul>
    <strong>Total: <span><?php echo getTotal($customerA) . '$'; ?> </span></strong>
    <hr />
    <h4>Customer B</h4>
    <ul>
        <?php
        foreach ($customerB as $key => $value) {
            if ($key == 0) {
                echo '<li><strong>Serie B</strong>: Core: ' . $value['core'] . ', Ram: ' . $value['ram'] . ', Disk: SSD ' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$';
            }

            if ($key == 1) {
                echo '<li><strong>Ram: </strong>' . $value['ram'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }

            if ($key == 2) {
                echo '<li><strong>Disk: </strong>' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }
        }
        ?>
    </ul>
    <strong>Total: <span><?php echo getTotal($customerB) . '$'; ?> </span></strong>
    <hr />
    <h4>Customer C</h4>
    <ul>
        <?php
        foreach ($customerC as $key => $value) {
            if ($key == 0) {
                echo '<li><strong>Serie C</strong>: Core: ' . $value['core'] . ', Ram: ' . $value['ram'] . ', Disk: SSD ' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$';
            }

            if ($key == 1) {
                echo '<li><strong>Ram: </strong>' . $value['ram'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }

            if ($key == 2) {
                echo '<li><strong>Disk: </strong>' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }

            if ($key == 3) {
                echo '<li><strong>VGA: </strong>' . $value['card'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }
        }
        ?>
    </ul>
    <strong>Total: <span><?php echo getTotal($customerC) . '$'; ?> </span></strong>
    <hr />
    <h4>Customer D</h4>
    <ul>
        <?php
        foreach ($customerD as $key => $value) {
            if ($key == 0) {
                echo '<li><strong>Serie C</strong>: Core: ' . $value['core'] . ', Ram: ' . $value['ram'] . ', Disk: SSD ' . $value['ssd'] . ', Price: <strong>' . $value['price'] . '</strong>$';
            }

            if ($key == 1) {
                echo '<li><strong>Ram: </strong>' . $value['ram'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }

            if ($key == 2) {
                echo '<li><strong>VGA: </strong>' . $value['card'] . ', Price: <strong>' . $value['price'] . '</strong>$</li>';
            }
        }
        ?>
    </ul>
    <strong>Total: <span><?php echo getTotal($customerD) . '$'; ?> </span></strong>
    <hr />
</body>

</html>