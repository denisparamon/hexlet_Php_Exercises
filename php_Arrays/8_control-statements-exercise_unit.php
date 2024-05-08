<?php

namespace App\Arrays;

function getTotalAmount($wallet, $currency)
{
    $total = 0;
    $count = count($wallet);
    $i = 0;
    while ($i < $count) {
        $money = $wallet[$i];
        $parts = explode(' ', $money);
        $curr = strtolower($parts[0]);
        $amount = intval($parts[1]);
        if ($curr === $currency) {
            $total += $amount;
        } else {
            $i++;
            continue;
        }
        $i++;
    }
    return $total;
}
