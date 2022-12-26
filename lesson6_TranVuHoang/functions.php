<?php
function getTotal($product) {
    $total = 0;
    foreach ($product as $value) {
        $total += $value;
    }
    return ($total);
}

function makeBill($product) {
    $totalBill = 0;
    $discount = 0;
    $sum = getTotal($product);

    if ($sum < 5000) {
        $discount = 0;
    } elseif ($sum <= 10000) {
        $discount += $sum * 5 / 100;
    } elseif ($sum > 10000) {
        $discount += $sum * 10 / 100;
    }
    $totalBill = $sum - $discount;

    return $totalBill;
}
