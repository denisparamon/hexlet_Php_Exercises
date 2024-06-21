<?php

namespace App\Words;

function countWords($sentence)
{
    $words = explode(' ', trim($sentence));
    $wordCounts = [];

    foreach ($words as $word) {
        $lowerWord = mb_strtolower($word);

        if ($lowerWord === '') {
            continue;
        }

        if (array_key_exists($lowerWord, $wordCounts)) {
            $wordCounts[$lowerWord]++;
        } else {
            $wordCounts[$lowerWord] = 1;
        }
    }
    return $wordCounts;
}
