<?php

namespace App\du;

use function Php\Immutable\Fs\Trees\trees\isDirectory;
use function Php\Immutable\Fs\Trees\trees\reduce;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getMeta;
use function Php\Immutable\Fs\Trees\trees\getChildren;

function du($node)
{
    // Получаем детей (поддиректории и файлы) корневого узла
    $children = getChildren($node);

    // Обрабатываем каждый узел и вычисляем их размеры
    $sizes = array_map(function ($child) {
        if (isDirectory($child)) {
            // Для директории нужно рекурсивно вычислить сумму размеров всех файлов внутри
            $totalSize = reduce(function ($acc, $n) {
                $meta = getMeta($n);
                return $acc + (isset($meta['size']) ? $meta['size'] : 0);
            }, $child, 0);
            return [getName($child), $totalSize];
        } else {
            // Для файла просто возвращаем его размер из метаданных
            $meta = getMeta($child);
            return [getName($child), isset($meta['size']) ? $meta['size'] : 0];
        }
    }, $children);

    // Сортируем по размеру в обратном порядке
    usort($sizes, function ($a, $b) {
        return $b[1] <=> $a[1];
    });

    return $sizes;
}
