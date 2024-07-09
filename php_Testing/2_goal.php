<?php

namespace App\Tests;

$functionName = getenv('FUNCTION_VERSION');
$filePath = __DIR__ . "/../implementations/get.{$functionName}.php";

if (!file_exists($filePath)) {
    throw new \Exception("Файл {$filePath} не найден.");
}

require_once $filePath;

if (!function_exists('\App\Implementations\get')) {
    throw new \Exception("Функция get не определена в файле {$filePath}.");
}

use function App\Implementations\get;

if (get(['hello' => 'world'], 'hello') !== 'world') {
    throw new \Exception('Тест 1 не пройден: функция должна возвращать значение по существующему ключу.');
}

if (get([], 'hello', 'kitty') !== 'kitty') {
    throw new \Exception('Тест 2 не пройден: функция должна возвращать значение по умолчанию, если ключа нет.');
}

if (get(['hello' => 'world'], 'hello', 'kitty') !== 'world') {
    throw new \Exception('Тест 3 не пройден: функция должна возвращать значение по существующему ключу, даже если передано значение по умолчанию.');
}

echo "Все тесты пройдены успешно.";
