<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <table border="1" cellpadding="10">
        <?php
        for ($i = 2; $i < 100; $i += 2) {
            if ($i == 2 || $i == 16 || $i == 30 || $i == 44 || $i == 58 || $i == 72 || $i == 86) {
                echo "<tr>";
            }

            if ($i % 3 == 0 && $i % 5 == 0) {
                echo '<td align="right">FOOBAZ</td>';
            } elseif ($i % 5 == 0) {
                echo '<td align="right">BAZ</td>';
            } elseif ($i % 3 == 0) {
                echo '<td align="right">FOO</td>';
            } else {
                echo '<td align="right" width="100">' . $i . '</td>';
            }

            if ($i % 14 == 0) {
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>