<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = 3600;

    private $secondsCount;

    // Конструктор
    public function __construct($seconds, $minutes = 0, $hours = 0)
    {
        // Подсчёт общего количества секунд
        $this->secondsCount = $seconds +
            $minutes * self::SEC_PER_MIN +
            $hours * self::SEC_PER_HOUR;
    }

    // Метод для получения оставшихся секунд
    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    // Метод для уменьшения оставшихся секунд
    public function tick()
    {
        if ($this->secondsCount > 0) {
            $this->secondsCount--;
        }
    }
}
