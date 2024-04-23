<?php

namespace App\Arrays;

function apply(array $items, string $operationName, int $index = null, $value = null): array
{
    switch ($operationName) {
        case 'reset':
            return []; // Возвращаем пустой массив для операции reset
        case 'remove':
            if (isset($items[$index])) {
                unset($items[$index]); // Удаляем элемент из массива, если он существует
            }
            return $items; // Возвращаем измененный массив
        case 'change':
            if (isset($items[$index])) {
                $items[$index] = $value; // Обновляем значение элемента массива, если индекс существует
            }
            return $items; // Возвращаем измененный массив
        default:
            return $items; // Возвращаем исходный массив, если операция не определена
    }
}

//// Решение от Хекслета:
//// NOTE: модифицировать параметры - плохая практика
//$result = $items;
//switch ($operationName) {
//    case 'reset':
//        $result = [];
//        break;
//    case 'change':
//        $result[$index] = $value;
//        break;
//    case 'remove':
//        unset($result[$index]);
//        break;
//}
//return $result;
//// END