<?php

namespace App\Arrays;

use function Functional\map;

function enlargeArrayImage(array $image): array
{
    // Увеличиваем каждый элемент строки в два раза
    $enlargedRows = map($image, function ($row) {
        return array_reduce($row, function ($acc, $item) {
            return array_merge($acc, [$item, $item]);
        }, []);
    });

    // Увеличиваем каждую строку в два раза
    $enlargedImage = array_reduce($enlargedRows, function ($acc, $row) {
        return array_merge($acc, [$row, $row]);
    }, []);

    return $enlargedImage;
}
