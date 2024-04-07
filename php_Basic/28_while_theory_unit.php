<?php

namespace App\Solution;

function printNumbers($firstNumber)
{
    $high_limit = $firstNumber;
    $low_limit = 0;
    $num = $high_limit;
    while ($num > $low_limit) {
        print_r($num . "\n");
        $num--;
    }
    print_r('finished!');
}
