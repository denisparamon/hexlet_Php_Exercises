<?php

namespace App\tree;

use function Php\Immutable\Fs\Trees\trees\mkdir;
use function Php\Immutable\Fs\Trees\trees\mkfile;
use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getChildren;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;

// Функция для сжатия изображений
function compressImages($tree)
{
    // Проверка, является ли текущий узел файлом
    if (isFile($tree)) {
        // Получаем имя файла
        $name = getName($tree);
        // Проверяем, заканчивается ли имя на '.jpg'
        if (strpos($name, '.jpg') !== false) {
            // Получаем метаданные файла
            $meta = getMeta($tree);
            // Уменьшаем размер в метаданных в два раза
            $meta['size'] = $meta['size'] / 2;
            // Возвращаем новый файл с обновленными метаданными
            return mkfile($name, $meta);
        }
        // Возвращаем файл без изменений, если это не изображение
        return $tree;
    }

    // Если это директория, получаем её детей
    $children = getChildren($tree);
    // Обрабатываем детей рекурсивно
    $newChildren = array_map(function ($child) {
        return compressImages($child);
    }, $children);

    // Возвращаем новую директорию с обновленными детьми
    return mkdir(getName($tree), $newChildren, getMeta($tree));
}
