<?php

namespace App\Solution;

use function App\Symbols\isVowel;

function countVowels($str)
{
    $vowelCount = 0;
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if (isVowel($str[$i])) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}
