<?php

//$numberart = '2034399002125581';
//$stars = '*';
//function getHiddenCard($numberart, $stars, $repeat = 4)
//
//{
//    $str = с($numberart, -4, 4);
//    $end = _default - parameters_exercise_unit . phpstr_repeat($stars, $repeat) . $str;
//    return $end;
//}
//
//$result = getHiddenCard($numberart, $stars);
//print_r("$result");

//function getHiddenCard($cardNumber, $numStars = 4)
//{
//    return str_repeat('*', 16 - $numStars) . substr($cardNumber, -4);
//}
//
// echo getHiddenCard("1234567812345678", 2) . "\n";


function getHiddenCard($cardNumber, $numStars = 4)
{
    $result = str_repeat('*', 8 - $numStars) . substr($cardNumber, -4);
    return $result;
}

echo getHiddenCard("1234567812345678");
