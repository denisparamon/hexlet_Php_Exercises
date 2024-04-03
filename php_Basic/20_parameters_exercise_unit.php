<?php

namespace App\Solution;

function truncate($text, $num)
{
    $x = substr($text, 0, $num);
    $y = $x . "...";
    return $y;
}
