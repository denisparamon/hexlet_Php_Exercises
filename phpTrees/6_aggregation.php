<?php

namespace App\getHiddenFilesCount;

use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getChildren;

// Функция для проверки, является ли путь скрытым
function isHidden($path) {
    return basename($path)[0] === '.';
}

// Рекурсивная функция для подсчета скрытых файлов
function getHiddenFilesCount($node)
{
    $hiddenFilesCount = 0;

    // Проверяем, является ли узел директорией
    if (!isFile($node)) {
        $children = getChildren($node); // Получаем детей (файлы и папки)
        foreach ($children as $child) {
            // Проверяем, является ли путь скрытым
            if (isHidden(getName($child))) {
                // Если это файл и он скрытый
                if (isFile($child)) {
                    $hiddenFilesCount++;
                } else {
                    // Если это директория, рекурсивно подсчитываем скрытые файлы в ней
                    $hiddenFilesCount += getHiddenFilesCount($child);
                }
            } elseif (!isFile($child)) {
                // Если это директория, рекурсивно подсчитываем скрытые файлы в ней
                $hiddenFilesCount += getHiddenFilesCount($child);
            }
        }
    } elseif (isHidden(getName($node))) {
        // Если $node - это скрытый файл
        $hiddenFilesCount++;
    }

    return $hiddenFilesCount;
}
