<?php

namespace App\Strings;

function countUniqChars(string $string)
{
    $charCount = [];
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (!isset($charCount[$char])) {
            $charCount[$char] = 1;
        } else {
            $charCount[$char]++;
        }
    }
    return count($charCount);
}
