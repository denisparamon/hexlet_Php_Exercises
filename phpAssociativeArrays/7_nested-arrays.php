<?php

namespace App\Arrays;

function getIn($array, $keys)
{
    $value = $array;
    foreach ($keys as $key) {
        if (isset($value[$key])) {
            $value = $value[$key];
        } else {
            return null; // или можно выбрасывать исключение, если ключ не существует
        }
    }
    return $value;
}
