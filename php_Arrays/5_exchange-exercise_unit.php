<?php

namespace App\Arrays;

function swap(array $array, int $index): array
{
    if ($index < 1 || $index >= count($array) - 1) {
        return $array;
    }

    $temp = $array[$index - 1];
    $array[$index - 1] = $array[$index + 1];
    $array[$index + 1] = $temp;

    return $array;
}
