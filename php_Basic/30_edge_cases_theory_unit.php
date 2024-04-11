<?php

namespace App\Solution;

function isArgumentsForSubstrCorrect($str, $index, $length)
{
    $str_length = strlen($str);
    if ($length < 0) {
        echo false;
        return false;
    }
    if ($index < 0) {
        echo false;
        return false;
    }
    if ($index >= $str_length) {
        echo false;
        return false;
    }
    if ($index + $length > $str_length) {
        echo false;
        return false;
    }

    echo true;
    return true;
}

//isArgumentsForSubstrCorrect('Sansa Stark', 0, 5);   //
