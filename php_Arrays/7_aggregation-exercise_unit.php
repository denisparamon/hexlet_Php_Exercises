<?php

namespace App\Arrays;

function calculateAverage($array)
{
    if (empty($array)) {
        return 0; // Возвращаем 0, если массив пуст
    }
    $sum = 0;
    foreach ($array as $num) {
        $sum += $num;
    }
    $count = count($array);
    $result = $sum / $count;
    return $result;
}
