<?php

namespace App\changeClass;

function changeClass(array $tree, string $oldClass, string $newClass): array
{
    // Рекурсивно обрабатываем текущий узел
    if (isset($tree['className']) && $tree['className'] === $oldClass) {
        $tree['className'] = $newClass;
    }

    // Обрабатываем дочерние элементы, если они есть
    if (isset($tree['children']) && is_array($tree['children'])) {
        foreach ($tree['children'] as &$child) {
            $child = changeClass($child, $oldClass, $newClass);
        }
    }

    return $tree;
}
<?php
