<!--src\Point.php-->

<?php

namespace App;

class Point {
    public $x;
    public $y;
}

//src\PointFunctions.php

namespace App\PointFunctions;

use App\Point;

function getMidpoint($point1, $point2)
{
    $midpoint = new Point();
    $midpoint->x = ($point1->x + $point2->x) / 2;
    $midpoint->y = ($point1->y + $point2->y) / 2;
    return $midpoint;
}
