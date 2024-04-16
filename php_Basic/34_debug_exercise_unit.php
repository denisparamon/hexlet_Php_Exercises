<?php

namespace App\Text;

function isPalindrome($word)
{
    $length = mb_strlen($word);
    for ($i = 0; $i < ceil($length / 2); $i++) {
        if (mb_substr($word, $i, 1) !== mb_substr($word, $length - $i - 1, 1)) {
            return false;
        }
    }
    return true;
}

////Решение хекслета:
//function isPalindrome(string $word)
//{
//    $lastIndex = mb_strlen($word) - 1;
//    $middleIndex = $lastIndex / 2;
//    for ($i = 0; $i < $middleIndex; $i++) {
//        $symbol = mb_substr($word, $i, 1);
//        $mirroredSymbol = mb_substr($word, $lastIndex - $i, 1);
//        if ($symbol !== $mirroredSymbol) {
//            return false;
//        }
//    }
//    return true;
//}
