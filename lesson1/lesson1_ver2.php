<table border="1" cellpadding="10" cellspacing="0">
    <?php
    echo '<tr>';

    for ($i = 2; $i < 100; $i += 2) {
        // if ($i % 3 == 0) {
        //     echo '<td align="right" width="70">FOO</td>';
        // } elseif ($i % 5 == 0) {
        //     echo '<td width="50" align="right">BAZ</td>';
        // } elseif ($i % 3 == 0 && $i % 5 == 0) {
        //     echo '<td align="right">FOOBAZ</td>';
        // } else
        {
            echo "<td align='right'>$i</td>";
        }

        if ($i % 14 == 0 && $i != 98) {
            echo "</tr><tr>";
        }
    }
    echo '</tr>';
    ?>
</table>