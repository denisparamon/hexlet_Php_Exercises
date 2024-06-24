<?php

namespace App\Arrays;

function getSortedNames($users)
{
    $names = array_column($users, 'name');
    sort($names);
    return $names;
}
