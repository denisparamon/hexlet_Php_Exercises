<?php

namespace App\Math;

function average(...$numbers)
{
    if (count($numbers) === 0) {
        return null;
    }
    $sum = array_sum($numbers);
    $count = count($numbers);
    $average = $sum / $count;
    return $average;
}
