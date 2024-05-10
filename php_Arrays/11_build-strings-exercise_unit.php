<?php

namespace App\Strings;

function buildDefinitionList($arr)
{
    // Проверяем, пуст ли массив $arr
    if (empty($arr)) {
        // Если массив пуст, возвращаем пустую строку
        return '';
    } else {
        // Создаем новый массив, преобразуя каждый вложенный массив
        // в строку HTML с помощью анонимной функции и array_map()
        $definitions = array_map(function ($pair) {
            // Для каждого вложенного массива формируем строку HTML
            // с тегами <dt> и <dd> и возвращаем ее
            return "<dt>{$pair[0]}</dt><dd>{$pair[1]}</dd>";
        }, $arr);
        // Объединяем все строки HTML из массива $definitions в одну строку
        // с помощью implode(), добавляя пустую строку в качестве разделителя
        // чтобы объединенные строки не имели разделителя
        $output = '<dl>' . implode('', $definitions) . '</dl>';
        // Возвращаем получившуюся строку с тегами <dl> и </dl>
        return $output;
    }
}
