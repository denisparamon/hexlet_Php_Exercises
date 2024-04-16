<?php

//// функция, которая считает СУММУ ЧИСЕЛ от числа $start до числа $finish.
//// Если начало равно трем, а конец — пяти, то программа должна вычислить: 3 + 4 + 5:
//function sumOfSeries($start, $finish)
//{
//    $sum = 0;
//    for ($i = $start; $i <= $finish; $i++) {
//        $sum += $i;
//    }
//
//    return $sum;
//}
//
//echo sumOfSeries(3,8);

////Функция принимает на вход слово и определяет, является ли оно ПАЛИНДРОМОМм, а затем возвращает логическое значение
//function isPalindrome($word)
//{
//    $length = mb_strlen($word);
//    for ($i = 0; $i < ceil($length / 2); $i++) {
//        if (mb_substr($word, $i, 1) !== mb_substr($word, $length - $i - 1, 1)) {
//            return false;
//        }
//    }
//    return true;
//}