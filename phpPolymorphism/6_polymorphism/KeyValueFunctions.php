<?php

namespace App\KeyValueFunctions;

function swapKeyValue($kv)
{
    $data = $kv->toArray();
    $swapped = array_flip($data);
    foreach ($data as $key => $value) {
        $kv->unset($key);
    }
    foreach ($swapped as $key => $value) {
        $kv->set($key, $value);
    }
}
