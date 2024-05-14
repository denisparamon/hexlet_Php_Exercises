<?php

namespace App\Arrays;

function flatten(array $array): array
{
    $result = [];
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = [...$result, ...$item];
        } else {
            $result[] = $item;
        }
    }
    return $result;
}
