<?php

namespace App\Square;

use App\Dispatcher;

// Конструктор, который создает квадрат с заданной длиной стороны
function make($side)
{
    return ['name' => __NAMESPACE__, 'data' => ['side' => $side]];
}

// Селектор, который возвращает длину стороны квадрата
function getSide($self)
{
    return $self['data']['side'];
}

// Инициализация полиморфной функции getArea для квадрата
function init()
{
    Dispatcher\defmethod(__NAMESPACE__, 'getArea', function ($self) {
        return $self['data']['side'] ** 2;
    });
}
