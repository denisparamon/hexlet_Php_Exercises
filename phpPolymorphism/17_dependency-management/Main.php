<?php

namespace App\Main;

use App\Logger;
use App\Application;
use App\LoggerInterface;

function buildApplication()
{
    // Создаем контейнер
    $container = new \DI\Container();

    // Регистрируем Logger как реализацию LoggerInterface
    $container->set(LoggerInterface::class, \DI\autowire(Logger::class));

    // Регистрируем класс Application, который будет собираться контейнером
    $container->set(Application::class, \DI\autowire(Application::class));

    // Извлекаем готовое приложение из контейнера
    return $container->get(Application::class);
}
