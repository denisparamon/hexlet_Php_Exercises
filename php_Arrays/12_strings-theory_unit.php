<?php

namespace App\Strings;

function makeCensored($text, $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $cresult[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }
    return implode(' ', $result);
}

////Решение Хекслет
//// BEGIN
//function makeCensored(string $text, array $stopWords)
//{
//    $words = explode(' ', $text);
//    $result = [];
//    foreach ($words as $word) {
//        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
//    }
//
//    return implode(' ', $result);
//}
//// END
///