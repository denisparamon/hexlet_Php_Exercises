<?php

namespace App\Normalizer;

function getQuestions($text)
{
    // Разбиваем текст на массив строк, учитывая символы новой строки
    $lines = preg_split('/\R/', $text);

    // Фильтруем строки, оставляя только те, которые заканчиваются знаком вопроса
    $questions = array_filter($lines, function ($line) {
        return trim($line) !== '' && substr(trim($line), -1) === '?';
    });

    // Обрезаем пробелы и объединяем отфильтрованные вопросы в одну строку, разделяя переводами строки
    $questions = array_map('trim', $questions);

    return implode("\n", $questions);
}
