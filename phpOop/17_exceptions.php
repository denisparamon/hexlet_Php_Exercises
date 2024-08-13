<?php

namespace App\Safe;

function json_decode($json, $assoc = false)
{
    $result = \json_decode($json, $assoc);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception('JSON decoding error: ' . json_last_error_msg());
    }

    return $result;
}
