<?php

namespace App\LinkedList;

use App\Node;

function reverse($list)
{
    $prev = null;
    $current = $list;

    while ($current !== null) {
        // Получаем ссылку на следующий элемент
        $next = $current->getNext();

        // Создаем новый узел, где текущий становится головой
        $reversedNode = new Node($current->getValue(), $prev);

        // Сдвигаем "предыдущий" на текущий
        $prev = $reversedNode;

        // Переходим к следующему узлу
        $current = $next;
    }

    return $prev;
}
