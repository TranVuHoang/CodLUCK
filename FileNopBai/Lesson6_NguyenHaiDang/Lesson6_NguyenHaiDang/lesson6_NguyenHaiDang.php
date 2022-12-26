<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lesson6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form {
            margin-left: 45px;
        }
    </style>
</head>

<body>
    <h1>Please select a product :</h1>
    <form method="POST" action="#">
        <input type="checkbox" id="product_a" name="pro[]" value="1000">
        <label for="product_a"> Product A (Price: 1000) </label><br>
        <input type="checkbox" id="product_b" name="pro[]" value="2000">
        <label for="product_b"> Product B (Price: 2000) </label><br>
        <input type="checkbox" id="product_c" name="pro[]" value="3000">
        <label for="product_c"> Product C (Price: 3000) </label><br>
        <input type="checkbox" id="product_d" name="pro[]" value="4000">
        <label for="product_d"> Product D (Price: 4000) </label><br>
        <input type="checkbox" id="product_e" name="pro[]" value="5000">
        <label for="product_e"> Product E (Price: 5000) </label><br>
        <hr>
        <input type="submit" name="submit" value="Checkout">
    </form>

    <h2>Checkout</h2>
    <?php
    $total = 0;

    if (isset($_POST['pro']) == true) {
        foreach ($_POST['pro'] as $value) {
            $total += $value;
        }
        echo "Total: $total";
        if ($total < 5000) {
            echo "Total money: " . number_format($total, 0, ',', '.');
        } elseif ($total >= 5000 && $total <= 10000) {
            echo "Total money: " . number_format($total - $total * 5 / 100, 0, ',', '.');
        } else {
            echo "Total money: " . number_format($total - $total * 10 / 100, 0, ',', '.');
        }
    } else {
        echo "Please choose a product";
    }
    ?>

</body>

</html>