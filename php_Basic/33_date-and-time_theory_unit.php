<?php

namespace App\Solution;

use DateTimeImmutable;

function getCustomDate($timestamp)
{
    $date = new DateTimeImmutable("@$timestamp");
    $formattedDate = $date->format('d/m/Y');
    return $formattedDate;
}

//echo getCustomDate(1532435204);
