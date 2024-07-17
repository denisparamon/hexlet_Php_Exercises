<?php

namespace App\Rectangle;

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;

// Создание прямоугольника
function makeRectangle($point, $width, $height) {
    return [
        'point' => $point,
        'width' => $width,
        'height' => $height,
    ];
}

// Селекторы
function getStartPoint($rectangle) {
    return $rectangle['point'];
}

function getWidth($rectangle) {
    return $rectangle['width'];
}

function getHeight($rectangle) {
    return $rectangle['height'];
}

// Проверка на принадлежность центра координат прямоугольнику
function containsOrigin($rectangle) {
    $startPoint = getStartPoint($rectangle);
    $width = getWidth($rectangle);
    $height = getHeight($rectangle);

    $leftX = getX($startPoint);
    $topY = getY($startPoint);
    $rightX = $leftX + $width;
    $bottomY = $topY - $height;

    return $leftX < 0 && $rightX > 0 && $topY > 0 && $bottomY < 0;
}

// END
