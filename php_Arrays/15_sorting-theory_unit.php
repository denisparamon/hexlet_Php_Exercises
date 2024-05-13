<?php

namespace App\Arrays;

function bubbleSort($array)
{
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

////Решение Хекслет
//// BEGIN
//function bubbleSort($arr)
//{
//    $size = count($arr);
//    do {
//        $swapped = false;
//        for ($i = 0, $stepsCount = $size - 1; $i < $stepsCount; $i++) {
//            if ($arr[$i] > $arr[$i + 1]) {
//                $temp = $arr[$i];
//                $arr[$i] = $arr[$i + 1];
//                $arr[$i + 1] = $temp;
//                $swapped = true;
//            }
//        }
//        $size--;
//    } while ($swapped);
//
//    return $arr;
//}
//
//// END