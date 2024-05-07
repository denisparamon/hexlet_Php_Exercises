<?php

namespace App\Arrays;

function addPrefix(array $array, string $prefix): array
{
    $result = [];
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $result [] = "{$prefix} {$array[$i]}";
    }
    return $result;
}

//// Решение от Хекслет
//// BEGIN
//function addPrefix($names, $prefix)
//{
//    $result = [];
//    for ($i = 0, $length = count($names); $i < $length; $i++) {
//        $result[$i] = "{$prefix} {$names[$i]}";
//    }
//
//    return $result;
//}
//// END