<?php

namespace App\Solution;

function getHiddenCard($cardNumber, $numStars = 4)
{
    $hiddenPart = str_repeat('*', $numStars);
    $lastDigits = substr($cardNumber, -4);
    $result = $hiddenPart . $lastDigits;
    return $result;
}
// по умолчанию работает 4 звезды из установленного параметра $numStars но если мы
// ему скормим другую цифру, то количество звездочек изменить на ту, которую указали
//echo getHiddenCard("1234567812345678", 8);
