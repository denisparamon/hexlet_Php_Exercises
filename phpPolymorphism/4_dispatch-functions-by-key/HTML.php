<?php

namespace App\HTML;

use Illuminate\Support\Collection;

function stringify($tag)
{
    // Извлекаем базовые параметры тега
    $name = $tag['name'];
    $tagType = $tag['tagType'];
    $body = $tag['body'] ?? '';

    // Все остальные параметры считаем атрибутами
    $attributes = Collection::make($tag)
        ->except(['name', 'tagType', 'body'])
        ->map(fn($value, $key) => sprintf('%s="%s"', $key, $value))
        ->join(' ');

    $attributesString = $attributes ? " $attributes" : '';

    // Возвращаем строковое представление
    if ($tagType === 'single') {
        return "<$name$attributesString>";
    }

    if ($tagType === 'pair') {
        return "<$name$attributesString>$body</$name>";
    }

    throw new \Exception("Unknown tag type: $tagType");
}

// END
