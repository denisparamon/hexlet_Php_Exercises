<?php

namespace App\Arrays;

function getSameParity($arr)
{
    if (empty($arr)) {
        return [];
    }
    $result = [];
    foreach ($arr as $num) {
        if ($arr[0] % 2 === 0 && $num % 2 === 0) {
            $result[] = $num;
        } elseif ($arr[0] % 2 !== 0 && $num % 2 !== 0) {
            $result[] = $num;
        }
    }
    return $result;
}
