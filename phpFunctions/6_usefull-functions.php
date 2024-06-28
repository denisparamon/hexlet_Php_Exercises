<?php

namespace App\Slugify;

function slugify($text)
{
    $text = strtolower($text);
    $text = preg_replace('/\s+/', '-', trim($text));
    return $text;
}
