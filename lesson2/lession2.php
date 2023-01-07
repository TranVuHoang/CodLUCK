<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th rowspan="2" align="center">Month/ Employee</th>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                switch ($day) {
                    case 1:
                    case 1 + 7:
                    case 1 + 7 * 2:
                    case 1 + 7 * 3:
                    case 1 + 7 * 4:
                        echo "<th>Tue</th>";
                        break;
                    case 2:
                    case 2 + 7:
                    case 2 + 7 * 2:
                    case 2 + 7 * 3:
                    case 2 + 7 * 4:
                        echo "<th>We</th>";
                        break;
                    case 3:
                    case 3 + 7:
                    case 3 + 7 * 2:
                    case 3 + 7 * 3:
                    case 3 + 7 * 4:
                        echo "<th>Thu</th>";
                        break;
                    case 4:
                    case 4 + 7:
                    case 4 + 7 * 2:
                    case 4 + 7 * 3:
                    case 4 + 7 * 4:
                        echo "<th>Fri</th>";
                        break;
                    case 5:
                    case 5 + 7:
                    case 5 + 7 * 2:
                    case 5 + 7 * 3:
                    case 5 + 7 * 4:
                        echo '<th class="orange">Sat</th>';
                        break;
                    case 6:
                    case 6 + 7:
                    case 6 + 7 * 2:
                    case 6 + 7 * 3:
                    case 6 + 7 * 4:
                        echo '<th class="orange">Sun</th>';
                        break;
                    default:
                        echo "<th>Mon</th>";
                        break;
                }
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                echo "<th>$day</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody class="tbody">
        <tr>
            <td>Employee A</td>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                switch ($day) {
                    case 4:
                    case 5:
                    case 7:
                    case 8:
                    case 12:
                        echo "<td>4</td>";
                        break;
                    case 9:
                    case 10:
                        echo "<td>8</td>";
                        break;
                    case 11:
                    case 14:
                        echo "<td>5</td>";
                        break;
                    default:
                        echo "<td></td>";
                        break;
                }
            ?>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Employee B</td>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                switch ($day) {
                    case 7:
                    case 8:
                    case 15:
                    case 16:
                        echo "<td>4</td>";
                        break;
                    case 14:
                    case 17:
                        echo "<td>8</td>";
                        break;
                    default:
                        echo "<td></td>";
                        break;
                }
            }
            ?>
        </tr>
        <tr>
            <td rowspan="">Employee C</td>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                switch ($day) {
                    case 21:
                    case 23:
                        echo "<td>4</td>";
                        break;
                    case 22:
                    case 24:
                        echo "<td>5</td>";
                        break;
                    case 25:
                    case 28:
                        echo "<td>8</td>";
                        break;
                    default:
                        echo "<td></td>";
                        break;
                }
            ?>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>Employee D</td>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                switch ($day) {
                    case 1:
                    case 2:
                    case 3:
                        echo "<td>8</td>";
                        break;
                    case 29:
                    case 30:
                    case 31:
                        echo "<td>4</td>";
                        break;
                    default:
                        echo "<td></td>";
                        break;
                }
            ?>
            <?php
            }
            ?>
        </tr>
    </tbody>
</table>

<style>
    :root {
        --orange-color: #ed7d31;
    }

    * {
        box-sizing: border-box;
    }

    table {
        margin: 100px auto;
        text-align: center;
        border-collapse: collapse;
    }

    th {
        font-weight: normal;
    }

    .orange {
        background-color: var(--orange-color);
    }

    thead tr:nth-child(2) th:nth-child(5),
    th:nth-child(6),
    thead tr:nth-child(2) th:nth-of-type(12),
    th:nth-of-type(13),
    thead tr:nth-child(2) th:nth-of-type(19),
    th:nth-of-type(20),
    thead tr:nth-child(2) th:nth-of-type(26),
    th:nth-of-type(27) {
        background-color: var(--orange-color);
    }

    tbody tr td:nth-child(6),
    td:nth-child(7),
    td:nth-child(13),
    td:nth-child(14),
    td:nth-child(20),
    td:nth-child(21),
    td:nth-child(27),
    td:nth-child(28) {
        background-color: var(--orange-color);
    }

    tbody tr td:first-child {
        text-align: left;
    }
</style>