<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lession 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'data_config.php';
    ?>
    <table border="1" cellpadding="10">
        <caption>
            <h2>List employees</h2>
        </caption>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Dependent persion</th>
                <th>Baby</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            foreach ($listEmployees as $employee) {
                $index++;
                $employeeName = $employee["name"];
                $employeeSalary = $employee["salary"];
                $employeeDependent = $employee["dependent"];
                $employeeBaby = $employee['baby'];
            ?>
                <tr>
                    <td align="center"><?php echo $index; ?></td>
                    <td><?php echo $employeeName; ?></td>
                    <td><?php echo number_format($employeeSalary); ?></td>
                    <td align="right"><?php echo $employeeDependent; ?></td>
                    <td align="right"><?php echo $employeeBaby; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <table border="1" cellpadding="10">
        <caption>
            <h2>Tax payale</h2>
        </caption>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Tax payale</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;

            foreach ($listEmployees as &$employee) {
                $index++;
                $employeeName = $employee['name'];
                $salary = $employee['salary'];
                $denpendent = $employee['dependent'];
                $baby = $employee['baby'];
                $tax = $salary - $denpendent * 3000000 - $baby * 5000000;
                $taxPayable = 0;

                if ($tax < 20000000) {
                    $taxPayable = $tax * 5 / 100; // 5%
                } elseif ($tax <= 35000000) {
                    $taxPayable = $tax * 10 / 100; // 10%
                } elseif ($tax > 35000000) {
                    $taxPayable = $tax * 15 / 100;  // 15%
                }
                // #debug
                $employee['tax'] = $tax;
                $employee['taxPayable'] = $taxPayable;
                echo "<pre>";
                print_r($employee);
                echo "</pre>";
            ?>
                <tr>
                    <td align="center"><?php echo $index; ?></td>
                    <td><?php echo $employeeName; ?></td>
                    <td align="right"><?php echo number_format($taxPayable); ?></td>
                </tr>
            <?php
            }
            ?>

            <?php
            #debug
            echo "<pre>";
            print_r($listEmployees);
            echo "</pre>";
            ?>
        </tbody>
    </table>
</body>

</html>