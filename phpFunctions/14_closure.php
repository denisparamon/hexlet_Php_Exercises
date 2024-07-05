<?php

namespace App\Arrays;

function without(...$args)
{
    $array = $args[0];
    $exclude = array_slice($args, 1);
    $filtered = array_filter($array, function ($item) use ($exclude) {
        return !in_array($item, $exclude, true);
    });
    return array_values($filtered);
}

//Решение хекслет стрелочным вариантом
//
//// BEGIN
//function without(array $items, ...$values)
//{
//    $filtered = array_filter($items, fn($item) => !in_array($item, $values, true));
//
//    // Сбрасываем ключи
//    return array_values($filtered);
//}
//// END