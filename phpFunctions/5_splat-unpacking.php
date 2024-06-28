<?php

namespace App\Arrays;

function union($first, ...$rest)
{
    $mergedArray = array_merge($first, ...$rest);
    $uniqueArray = array_unique($mergedArray);
    return array_values($uniqueArray);
}
