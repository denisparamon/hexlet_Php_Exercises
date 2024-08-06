<?php
//Segment.php:

namespace App;

class Segment
{
    public $beginPoint;
    public $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}

//SegmentFunctions.php

namespace App\SegmentFunctions;

use App\Point;
use App\Segment;

function reverse(Segment $segment)
{
    $newBeginPoint = new Point($segment->endPoint->x, $segment->endPoint->y);
    $newEndPoint = new Point($segment->beginPoint->x, $segment->beginPoint->y);

    return new Segment($newBeginPoint, $newEndPoint);
}
