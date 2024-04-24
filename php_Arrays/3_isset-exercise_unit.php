<?php

namespace App\Arrays;

function get(array $array, int $index, $defaultValue = null)
{
    if (array_key_exists($index, $array)) {
        return $array[$index];
    } else {
        return $defaultValue;
    }
}

////Решение от Хекслет:
//
//// BEGIN
//function get(array $arr, $index, $default = null)
//{
//    return array_key_exists($index, $arr) ? $arr[$index] : $default;
//}