<?php

namespace App\Prime;

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
function sayPrimeOrNot($number)
{
    if (isPrime($number)) {
        echo 'yes';
    } else {
        echo 'no';
    }
}
