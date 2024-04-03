<?php

namespace App\Solution;

function isLeapYear($year)
{
    $x = ($year % 400 == 0 || ($year % 4 == 0 and $year % 100 != 0));
    return $x;
}

// $year = 2017;
// $result = isLeapYear($year);
// var_dump($result);
