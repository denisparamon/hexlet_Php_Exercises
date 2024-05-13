<?php

namespace App\Strings;

function checkIfBalanced($expression)
{
    $stack = []; // Создаем пустой стек

    // Проходим по каждому символу в выражении
    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $char = $expression[$i]; // Текущий символ

        // Если текущий символ - открывающая скобка, добавляем ее в стек
        if ($char == '(') {
            array_push($stack, $char);
        } elseif ($char == ')') {
            // Если стек пуст или последний элемент в стеке не является открывающей скобкой, возвращаем false
            if (empty($stack) || array_pop($stack) != '(') {
                return false;
            }
        }
    }

    // Если стек пуст после прохождения всех символов, скобки сбалансированы
    return empty($stack);
}

////Решение хекслет
//// BEGIN
//function checkIfBalanced(string $expression): bool
//{
//    $stack = [];
//    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
//        $curr = $expression[$i];
//        if ($curr === '(') {
//            array_push($stack, $curr);
//        } elseif ($curr === ')') {
//            if (empty($stack)) {
//                return false;
//            }
//            array_pop($stack);
//        };
//    }
//
//    return empty($stack);
//}
//// END