<?php

namespace App\Points;

function makePoint($x, $y)
{
    return [
        'angle' => atan2($y, $x),
        'radius' => sqrt($x ** 2 + $y ** 2)
    ];
}

function getX($point)
{
    return $point['radius'] * cos($point['angle']);
}

function getY($point)
{
    return $point['radius'] * sin($point['angle']);
}
