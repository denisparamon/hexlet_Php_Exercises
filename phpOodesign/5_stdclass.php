<?php

namespace App\Converter;

function toStd(array $data): \stdClass
{
    $obj = new \stdClass();

    foreach ($data as $key => $value) {
        $obj->$key = $value;
    }

    return $obj;
}
