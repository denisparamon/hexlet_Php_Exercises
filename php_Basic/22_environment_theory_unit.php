<?php
const ONE = 998;
const TWO = 1966;

function getAgeDifference()

{
    $difference = ONE - TWO;
    $end = "The age difference is " . abs($difference);
    return $end;

}

$result = getAgeDifference();
print_r($result);