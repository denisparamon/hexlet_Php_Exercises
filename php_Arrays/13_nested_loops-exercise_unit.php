<?php

namespace App\Arrays;

function getSameCount(array $arr1, array $arr2)
{
    $uniqueArr1 = array_unique($arr1);
    $uniqueArr2 = array_unique($arr2);
    $intersection = array_intersect($uniqueArr1, $uniqueArr2);
    return count($intersection);
}

////Решение преподавателя:
//// BEGIN
//function getSameCount($coll1, $coll2)
//{
//    $count = 0;
//    $uniqColl1 = array_unique($coll1);
//    $uniqColl2 = array_unique($coll2);
//    foreach ($uniqColl1 as $item1) {
//        foreach ($uniqColl2 as $item2) {
//            if ($item1 === $item2) {
//                $count++;
//            }
//        }
//    }
//
//    return $count;
//}
//// END