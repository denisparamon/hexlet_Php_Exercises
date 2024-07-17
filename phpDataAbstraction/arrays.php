<?php

namespace App\Points;

function getMidpoint(array $point1, array $point2): array
{
    $x1 = $point1['x'];
    $y1 = $point1['y'];
    $x2 = $point2['x'];
    $y2 = $point2['y'];

    $midpointX = ($x1 + $x2) / 2;
    $midpointY = ($y1 + $y2) / 2;

    return ['x' => $midpointX, 'y' => $midpointY];
}
<?php
