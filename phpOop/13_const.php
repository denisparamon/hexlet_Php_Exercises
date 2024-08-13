<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = 3600;

    private int $secondsCount;

    // Конструктор
    public function __construct(int $seconds, int $minutes = 0, int $hours = 0)
    {
        // Подсчёт общего количества секунд
        $this->secondsCount = $seconds +
            $minutes * self::SEC_PER_MIN +
            $hours * self::SEC_PER_HOUR;
    }

    // Метод для получения оставшихся секунд
    public function getLeftSeconds(): int
    {
        return $this->secondsCount;
    }

    // Метод для уменьшения оставшихся секунд
    public function tick(): void
    {
        if ($this->secondsCount > 0) {
            $this->secondsCount--;
        }
    }
}
