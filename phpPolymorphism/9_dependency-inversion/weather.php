<?php

require __DIR__ . '/../src/WeatherService.php';

use App\WeatherService;

// Получение аргумента командной строки
$cityName = $argv[1] ?? null;

if ($cityName === null) {
    echo "Usage: php bin/weather.php <city_name>\n";
    exit(1);
}

$weatherService = new WeatherService();

try {
    $weatherData = $weatherService->lookup($cityName);
    echo "Temperature in {$weatherData['name']}: {$weatherData['temperature']}C\n";
} catch (\Exception $e) {
    echo "Error fetching weather data: " . $e->getMessage() . "\n";
    exit(1);
}
