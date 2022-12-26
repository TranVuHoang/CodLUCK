<?php
$listEmployees = [
    1 => [
        "name"      => "Employee A",
        "salary"    => 15000000,
        "dependent" => 1,
        "baby"      => 0
    ],
    2 => [
        "name"      => "Employee B",
        "salary"    => 25000000,
        "dependent" => 2,
        "baby"      => 1
    ]
];

/** Xuất ra mảng bằng foreach */
foreach ($listEmployees as $key => $employee) {
    $employee['email'] = 'email' . $key . '@gmail.com';
    echo "<pre>";
    print_r($employee);
    echo "</pre>";
}
echo "<hr/>";

echo "<pre>";
print_r($listEmployees);
echo "</pre>";
?>

<table border="1" cellspacing='0'>
    <thead>
    </thead>
    <tbody>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<td>' . $i . ' x </td>';
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>$j</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <td>1 x 1 = 1</td>
            <td>1 x 1 = 1</td>
            <td>1 x 1 = 1</td>
            <td>1 x 1 = 1</td>
            <td>1 x 1 = 1</td>
            <td>1 x 1 = 1</td>
        </tr>
    </tbody>
</table>