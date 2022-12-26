<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
</head>

<>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 2; $i < 100; $i += 2) {
            if ($i == 2 || $i == 16 || $i == 30 || $i == 44 || $i == 58 || $i == 72 || $i == 86) {
                echo "<tr>";
            }

            if ($i % 3 == 0) {
                echo '<td align="right" width="70">FOO</td>';
            } elseif ($i % 5 == 0) {
                echo '<td width="50" align="right">BAZ</td>';
            } elseif ($i % 3 == 0 && $i % 5 == 0) {
                echo '<td align="right">FOOBAZ</td>';
            } else {
                echo "<td align='right'>$i</td>";
            }

            if ($i % 14 == 0) {
                echo "</tr>";
            }
        }
        ?>
    </table>

    <h2>Code of OnpenAI :))</h2>
    <?php
    echo '<table border="1" cellpadding="10" cellspacing="0"><tr>';

    for ($i = 2; $i < 100; $i += 2) {
        echo '<td align="right">';

        if ($i % 3 == 0 && $i % 5 == 0) {
            echo 'FOOBAZ';
        } else if ($i % 3 == 0) {
            echo 'FOO';
        } else if ($i % 5 == 0) {
            echo 'BAZ';
        } else {
            echo $i;
        }

        if ($i % 14 == 0) {
            echo '</tr><tr>';
        }
        echo '</td>';
    }

    echo '</tr></table>';
    ?>

    <h2>Final</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        echo '<tr>';

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
        echo '</tr>';
        ?>
    </table>


    </body>

</html>