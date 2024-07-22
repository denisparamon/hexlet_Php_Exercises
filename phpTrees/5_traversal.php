<?php

namespace App\downcaseFileNames;

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;
use function Php\Immutable\Fs\Trees\trees\getChildren;

function downcaseFileNames($tree) {
    // Проверяем, является ли текущий узел файлом
    if (isFile($tree)) {
        // Получаем имя файла и приводим его к нижнему регистру
        $name = strtolower(getName($tree));
        // Получаем метаданные файла
        $meta = getMeta($tree);
        // Создаем новый файл с измененным именем
        return mkfile($name, $meta);
    }

    // Если узел является директорией, обрабатываем его детей рекурсивно
    $children = getChildren($tree);
    $newChildren = array_map('App\downcaseFileNames\downcaseFileNames', $children);

    // Создаем новую директорию с обновленными детьми
    return mkdir(getName($tree), $newChildren, getMeta($tree));
}

