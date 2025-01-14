<?php

namespace App;

use Exception;

class GoogleStorage implements StorageInterface
{
    private $storage = [];

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }

    public function get($key)
    {
        return $this->storage[$key] ?? null;
    }

    public function count()
    {
        // GoogleStorage не поддерживает подсчет, поэтому генерируем исключение
        throw new Exception("GoogleStorage не поддерживает подсчет количества элементов.");
    }
}
