<?php
//
//function truncate($text, $num) {
//
//    $x = substr($text, 0, $num);
//    $y = $x . " ...";
//    return $y;
//
//}
//
//$result = truncate("TestText", 3);
//print_r($result);


function truncate($text, $num)
{

    $x = substr($text, 0, $num);
    $y = $x . " ...";
    return $y;

}

$text = 'TestText';
$num = 3;
$z = truncate($text, $num);
print_r($z);