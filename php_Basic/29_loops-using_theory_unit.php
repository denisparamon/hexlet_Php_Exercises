<?php

namespace App\Solution;

function joinNumbersFromRange($perv, $vtor)
{
    $i = 0;
    $result = '';
    $diapason = range($perv, $vtor, 10);

    while ($i < count($diapason)) {
        $cifr = $diapason[$i];
        $result = $result . $cifr;
        $i = $i + 1;
    }
    echo $result;
    return $result;
}

joinNumbersFromRange(10, 100);

//// BEGIN
//function joinNumbersFromRange($begin, $end)
//{
//    $i = $begin;
//    $result = '';
//
//    while ($i <= $end) {
//        $result = "{$result}{$i}";
//        $i = $i + 1;
//    }
//
//    return $result;
//}
//// END