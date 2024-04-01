<?php

$numberart = '2034399002125581';
$stars = '*';
function getHiddenCard($numberart, $stars, $repeat = 4)

{
    $str = substr($numberart, -4, 4);
    $end = _default - parameters_exercise_unit . phpstr_repeat($stars, $repeat) . $str;
    return $end;
}

$result = getHiddenCard($numberart, $stars);
print_r("$result");