<?php

namespace App;

use Carbon\Carbon;

class Booking
{
    private $bookings = [];

    public function book(string $startDate, string $endDate): bool
    {
        // Преобразуем входные строки в объекты Carbon
        $start = Carbon::createFromFormat('d-m-Y', $startDate);
        $end = Carbon::createFromFormat('d-m-Y', $endDate);

        // Если начало брони после окончания или равно ему, бронь невозможна
        if ($start->gte($end)) {
            return false;
        }

        // Проверяем пересечение с существующими бронями
        foreach ($this->bookings as [$existingStart, $existingEnd]) {
            if ($start->lt($existingEnd) && $end->gt($existingStart)) {
                return false;
            }
        }

        // Если нет пересечений, добавляем бронь
        $this->bookings[] = [$start, $end];
        return true;
    }
}
