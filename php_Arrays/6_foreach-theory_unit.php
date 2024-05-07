<?php

namespace App\Arrays;

function isContinuousSequence($coll)
{
    if (count($coll) <= 1) {
        return false;
    }

    $start = $coll[0];
    $index = 0;

    foreach ($coll as $item) {
        if ($start + $index !== $item) {
            return false;
        }
        $index++;
    }

    return true;
}


////Решение от хекслет
//// BEGIN
//function isContinuousSequence($coll)
//{
//    if (count($coll) <= 1) {
//        return false;
//    }
//    $start = $coll[0];
//    foreach ($coll as $i => $item) {
//        if ($start + $i !== $item) {
//            return false;
//        }
//    }
//
//    return true;
//}
//// END