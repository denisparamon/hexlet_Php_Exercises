<?php

namespace App;

use SplFileInfo;

class SmartSplFileInfo extends SplFileInfo
{
    public function getSize($unit = 'B')
    {
        // Получаем размер файла в байтах
        $sizeInBytes = parent::getSize();

        // Проверяем, какой параметр передан: B (байты) или b (биты)
        if ($unit === 'B') {
            return $sizeInBytes; // Возвращаем размер в байтах
        } elseif ($unit === 'b') {
            return $sizeInBytes * 8; // Возвращаем размер в битах (1 байт = 8 бит)
        } else {
            // Выброс исключения, если передана некорректная единица измерения
            throw new \Exception('Invalid unit provided. Use "B" for bytes or "b" for bits.');
        }
    }
}
