<?php

namespace App\Solution;

function getCurrentYear()
{
    $date = date('Y-m-d');
    $date = substr($date, 0, 4);
    return (int)$date;
}
