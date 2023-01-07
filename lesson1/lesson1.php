<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <?php
            for ($i = 2; $i < 100; $i += 2) {
                if ($i % 3 == 0) {
                    echo '<td align="right" width="70">FOO</td>';
                } elseif ($i % 5 == 0) {
                    echo '<td width="50" align="right">BAZ</td>';
                } elseif ($i % 3 == 0 && $i % 5 == 0) {
                    echo '<td align="right">FOOBAZ</td>';
                } else {
                    echo "<td align='right'>$i</td>";
                }

                if ($i % 14 == 0 && $i != 98) {
                    echo "</tr><tr>";
                }
            }
            ?>
        </tr>
    </table>
</body>

</html>