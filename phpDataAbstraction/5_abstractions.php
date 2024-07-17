<?php


namespace App\Segments;

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;

function makeSegment($point1, $point2)
{
    return ['begin' => $point1, 'end' => $point2];
}

function getMidpointOfSegment($segment)
{
    $begin = getBeginPoint($segment);
    $end = getEndPoint($segment);

    $midX = (getX($begin) + getX($end)) / 2;
    $midY = (getY($begin) + getY($end)) / 2;

    return makeDecartPoint($midX, $midY);
}

function getBeginPoint($segment)
{
    return $segment['begin'];
}

function getEndPoint($segment)
{
    return $segment['end'];
}
