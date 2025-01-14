<?php

namespace App;

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid()
    {
        // Получаем допустимые атрибуты для элемента
        $validAttributes = static::getAttributeNames();
        $attributes = array_keys($this->attributes);

        // Проверяем, что все атрибуты допустимы
        $invalidAttributes = array_diff($attributes, $validAttributes);
        return empty($invalidAttributes);
    }
}
