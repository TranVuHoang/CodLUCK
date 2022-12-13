<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 6</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    require_once './functions.php';
    ?>
    <h1>Please select a product:</h1>
    <form method="POST" action="">
        <input type="checkbox" name="product[]" id="product-a" value="1000" />
        <label for="product-a">Product A (Price: 1000)</label><br />

        <input type="checkbox" name="product[]" id="product-b" value="2000" />
        <label for="product-b">Product B (Price: 2000)</label><br />

        <input type="checkbox" name="product[]" id="product-c" value="3000" />
        <label for="product-c">Product C (Price: 3000)</label><br />

        <input type="checkbox" name="product[]" id="product-d" value="4000" />
        <label for="product-d">Product D (Price: 4000)</label><br />

        <input type="checkbox" name="product[]" id="product-e" value="5000" />
        <label for="product-e" class="hr">Product E (Price: 5000)</label><br />

        <div class="line"></div>
        <button type="submit">checkout</button>
    </form>

    <h2>Checkout</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['product'])) {
            $product = $_POST['product'];
            $result = (makeBill($product));
            $toTal = getTotal($product);

            if ($toTal < 5000) {
                echo "Total money: <strong>$" . number_format($result) . "</strong>";
            } elseif ($toTal <= 10000) {
                echo "Total money: <strong>$" . number_format($result) . "</strong> (discount 5%)";
            } else {
                echo "Total money: <strong>$" . number_format($result) . "</strong> (discount 10%)";
            }
        } else {
            echo "Please a product!";
        }
    }
    ?>
</body>

</html>