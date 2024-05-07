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

////Решение Хекслет:
//// BEGIN
//function swap($coll, $center)
//{
//    $result = $coll;
//    $prevIndex = $center - 1;
//    $nextIndex = $center + 1;
//    $isSwappable = array_key_exists($prevIndex, $coll) && array_key_exists($nextIndex, $coll);
//
//    if ($isSwappable) {
//        $temp = $coll[$prevIndex];
//        $result[$prevIndex] = $coll[$nextIndex];
//        $result[$nextIndex] = $temp;
//    }
//
//    return $result;
//}
//// END