<?php

namespace App\Number;

function reverse(int $number)
{
    $isNegative = $number < 0; // Проверяем, является ли число отрицательным
    $number = abs($number); // Преобразуем число к положительному виду
    $numberStr = (string) $number; // Преобразуем число в строку
    $reversStr = strrev($numberStr); // Переворачиваем строку
    $reversNumber = (int) $reversStr; // Преобразуем обратно в число
    if ($isNegative) { // Если было отричательным то возвращаем его обратно в отцальное
        $reversNumber *= -1;
    }
    return $reversNumber;
}

//// Решение от Хекслет:
// function reverse(int $num): int
//{
//    $reverse = (int) strrev((string) abs($num));
//    return $num >= 0 ? $reverse : -$reverse;
//}