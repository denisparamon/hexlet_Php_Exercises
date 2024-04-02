<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isLeapYearn($year)
{
    $x = ($year % 400 == 0 || ($year % 4 == 0 and $year % 100 != 0));
    return $x;
}

// $year = 2017;
// $result = isLeapYearn($year);
// var_dump($result);
// END
