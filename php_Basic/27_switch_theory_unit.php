<?php

namespace App\Solution;

function calculate($operator, $num, $num2)
{
    switch ($operator) {
        case '+':
            return $num + $num2;
        case '-':
            return $num - $num2;
        case '*':
            return $num * $num2;
        case '/':
            if ($num2 != 0) {
                return $num / $num2;
            } else {
                return null;
            }
        default:
            return null;
    }
}
