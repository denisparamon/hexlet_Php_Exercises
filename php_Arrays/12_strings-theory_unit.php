<?php

namespace App\Strings;

function makeCensored($text, $stopWords)
{
    $words = explode(' ', $text);
    $censoredWords = [];
    foreach ($words as $word) {
        $censoredWords[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }
    return implode(' ', $censoredWords);
}
