<?php

namespace App\AssociativeArrays;

function buildQueryString($parameters)
{
    ksort($parameters);

    $queryString = '';

    foreach ($parameters as $key => $value) {
        $queryString .= ($queryString ? '&' : '') . urlencode($key) . '=' . urlencode($value);
    }

    return $queryString;
}
