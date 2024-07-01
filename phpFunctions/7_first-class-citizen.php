<?php

namespace App\Strings;

function run(string $text)
{
    $last = function($text) {
        if ($text === '') {
            return null;
        }
        return $text[strlen($text) - 1];
    };

    return $last($text);
}

