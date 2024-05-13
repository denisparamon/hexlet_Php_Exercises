<?php

namespace App\Arrays;

function getIntersectionOfSortedArray($arr1, $arr2)
{
    $result = [];
    $i = 0;
    $j = 0;
    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] == $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
            $j++;
        } elseif ($arr1[$i] < $arr2[$j]) {
            $i++;
        } else {
            $j++;
        }
    }
    return $result;
}

////Решение хекслет
//// BEGIN
//$size1 = count($arr1);
//$size2 = count($arr2);
//
//$i1 = 0;
//$i2 = 0;
//$result = [];
//while ($i1 < $size1 && $i2 < $size2) {
//    if ($arr1[$i1] === $arr2[$i2]) {
//        $result[] = $arr1[$i1];
//        $i1++;
//        $i2++;
//    } elseif ($arr1[$i1] > $arr2[$i2]) {
//        $i2++;
//    } else {
//        $i1++;
//    }
//}
//
//return $result;
//// END