<?php

function pick($array, $keys) {
    $result = [];  // Создаем пустой массив $result для хранения выбранных элементов.
    foreach ($keys as $key) {  // Перебираем каждый ключ из массива $keys.
        if (array_key_exists($key, $array)) {  // Проверяем, существует ли данный ключ в исходном массиве $array.
            $result[$key] = $array[$key];  // Если ключ существует, добавляем его в массив $result.
        }
    }
    return $result;  // Возвращаем массив $result, содержащий выбранные элементы.
}
