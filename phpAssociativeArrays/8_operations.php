<?php

namespace App\Solution;

function genDiff($arr1, $arr2)
{
    // Получаем все ключи из обоих массивов
    $keys = array_merge(array_keys($arr1), array_keys($arr2));
    $keys = array_unique($keys); // Убираем дублирующиеся ключи

    $result = [];

    foreach ($keys as $key) {
        $in_arr1 = array_key_exists($key, $arr1);
        $in_arr2 = array_key_exists($key, $arr2);

        if ($in_arr1 && $in_arr2) {
            // Ключ есть в обоих массивах
            if ($arr1[$key] === $arr2[$key]) {
                $result[$key] = 'unchanged';
            } else {
                $result[$key] = 'changed';
            }
        } elseif ($in_arr1 && !$in_arr2) {
            // Ключ только в первом массиве
            $result[$key] = 'deleted';
        } elseif (!$in_arr1 && $in_arr2) {
            // Ключ только во втором массиве
            $result[$key] = 'added';
        }
    }

    return $result;
}
