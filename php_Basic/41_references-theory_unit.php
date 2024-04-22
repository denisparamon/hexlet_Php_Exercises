<?php

namespace App\Vars;

function swap(&$x, &$y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
}
