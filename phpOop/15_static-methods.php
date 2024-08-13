<?php

namespace App;

class Time
{
    private $h;
    private $m;

    public static function fromString($timeString)
    {
        list($h, $m) = explode(':', $timeString);

        return new self($h, $m);
    }

    public function __construct(int $h, int $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
}
