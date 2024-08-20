<?php

namespace App\Normalizer;

use Illuminate\Support\Collection;

function normalize(array $raw): array
{
    return collect($raw)
        // Приводим значения к нижнему регистру и убираем пробелы
        ->map(fn($city) => [
            'name' => trim(strtolower($city['name'])),
            'country' => trim(strtolower($city['country']))
        ])
        // Группируем города по странам
        ->groupBy('country')
        // Убираем дубли городов и сортируем города в каждой стране
        ->map(fn($cities) => $cities->pluck('name')->unique()->sort()->values()->all())
        // Сортируем по странам
        ->sortKeys()
        ->toArray();
}
