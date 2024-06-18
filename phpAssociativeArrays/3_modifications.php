<?php

namespace App\Lessons;

function normalize(&$lesson)
{
    // Капитализация имени (первый символ каждого слова заглавный, остальные маленькие)
    $lesson['name'] = mb_convert_case($lesson['name'], MB_CASE_TITLE, "UTF-8");

    // Приведение описания к нижнему регистру
    $lesson['description'] = mb_strtolower($lesson['description'], "UTF-8");
}

//// Решение Хекслет
//
//function normalize(array &$lesson): void
//{
//    $lesson['name'] = mb_convert_case($lesson['name'], MB_CASE_TITLE, 'UTF-8');
//    $lesson['description'] = mb_strtolower($lesson['description']);
//}