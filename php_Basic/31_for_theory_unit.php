<?php

namespace App\Solution;

function sumOfSeries($num1, $num2)
{
    $result = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        $result += $i;
    }
    return $result;
}

//sumOfSeries(4, 7);
