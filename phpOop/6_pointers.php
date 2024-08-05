<?php

namespace App\PointFunctions;

use App\Point;

function dup(Point $point): Point {
    return clone $point;
}
