<?php

namespace App;

class HTMLButtonElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid()
    {
        $validAttributes = static::getAttributeNames();
        $attributes = array_keys($this->attributes);

        // Проверяем, что все атрибуты допустимы
        $invalidAttributes = array_diff($attributes, $validAttributes);
        if (!empty($invalidAttributes)) {
            return false;
        }

        // Проверяем атрибут type на допустимые значения
        if (isset($this->attributes['type']) && !in_array($this->attributes['type'], self::TYPE_NAMES)) {
            return false;
        }

        // Атрибут type обязателен
        if (!isset($this->attributes['type'])) {
            return false;
        }

        return true;
    }
}
