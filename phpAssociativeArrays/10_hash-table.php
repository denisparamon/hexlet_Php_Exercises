<?php

namespace App\Map;

// Создаёт новый словарь
function make()
{
    return array_fill(0, 1000, null);
}

// Устанавливает в словарь значение по ключу
function set(&$map, $key, $value)
{
    $index = crc32($key) % 1000;

    if ($map[$index] === null || $map[$index]['key'] === $key) {
        $map[$index] = ['key' => $key, 'value' => $value];
        return true;
    }

    return false; // Коллизия
}

// Читает в словаре значение по ключу и возвращает его
function get($map, $key, $defaultValue = null)
{
    $index = crc32($key) % 1000;

    if ($map[$index] !== null && $map[$index]['key'] === $key) {
        return $map[$index]['value'];
    }

    return $defaultValue;
}
