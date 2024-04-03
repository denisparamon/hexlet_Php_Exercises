<?php

//const DAY = 6;
//const MOUNT = 5;
//const YEAR = 1987;
// $day = 6;
// $mount = 5;
// $year = 1987;
namespace App\Solution;

function getFormattedBirthday($day, $mount, $year)
{
    $x = str_pad($day, 2, '0', STR_PAD_LEFT);
    $y = sprintf("%s-%02d-%d", $x, $mount, $year);
    return $y;
}

// $result = getFormattedBirthday($day, $mount, $year);
// print_r($result);
