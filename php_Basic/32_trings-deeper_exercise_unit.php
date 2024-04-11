<?php

namespace App\Solution;

function invertCase($text)
{
    $result = '';
    $length = mb_strlen($text);
    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($text, $i, 1);
        if (mb_strtolower($char) === $char) {
            $result .= mb_strtoupper($char);
        } else {
            $result .= mb_strtolower($char);
        }
    }
    return $result;
}

// $str = 'ПрИвЕт!';
// echo invertCase($str); // пРиВеТ!

////Решение из подсказки Хекслета:
// $len = mb_strlen($text);
//     $result = '';
//     for ($i = 0; $i < $len; $i++) {
//         $symbol = mb_substr($text, $i, 1);
//         $lowerSymbol = mb_strtolower($symbol);
//         if ($symbol === $lowerSymbol) {
//             $result .= mb_strtoupper($symbol);
//         } else {
//             $result .= $lowerSymbol;
//         }
//     }

//     return $result
