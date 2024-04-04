<?php

namespace App\Solution;

function convertText($str)
{
    if (ctype_upper($str[0])) {
        return $str;
    } else {
        return strrev($str);
    }
}

//// Примеры использования
//echo convertText('Hello') . "\n"; // 'Hello'
//echo convertText('hello') . "\n"; // 'olleh'
//
//// Вариант с тернарным оператором
//function convertText($str) {
//    return (ctype_upper($str[0])) ? $str : strrev($str);

// Примеры использования
//echo convertText('hey') . "\n"; // 'Hello'
//echo convertText('hello') . "\n"; // 'olleh'
