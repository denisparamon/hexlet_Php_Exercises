// Реализуйте функцию calculateDistance(), которая находит расстояние между двумя точками на плоскости.

<?php

namespace App\Points;

function calculateDistance(array $point1, array $point2): float
{
    $x1 = $point1[0];
    $y1 = $point1[1];
    $x2 = $point2[0];
    $y2 = $point2[1];

    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    return $distance;
}

