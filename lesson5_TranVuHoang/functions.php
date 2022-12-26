<?php
if (!function_exists('getTotal')) {
    function getTotal($customer)
    {
        $total = 0;
        foreach ($customer as $value) {
            $total += $value['price'];
        }
        return number_format($total);
    }
}
