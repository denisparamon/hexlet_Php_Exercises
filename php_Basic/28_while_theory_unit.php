<?php

namespace App\Solution;

function printNumbers($firstNumber)
{
    $i = 3;
    while ($i >= 0){
        print_r($i);
        print_r('\n');
        $i = $i - 1;
    }
    print_r('finished!');
}

printNumbers(3);
// 3\n2\n1\n0\nfinished!
