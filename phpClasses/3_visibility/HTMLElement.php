<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function addClass($className)
    {
        $classes = $this->getClassArray();
        if (!in_array($className, $classes)) {
            $classes[] = $className;
        }
        $this->setClassArray($classes);
    }

    public function removeClass($className)
    {
        $classes = $this->getClassArray();
        $classes = array_filter($classes, fn($class) => $class !== $className);
        $this->setClassArray($classes);
    }

    public function toggleClass($className)
    {
        $classes = $this->getClassArray();
        if (in_array($className, $classes)) {
            $this->removeClass($className);
        } else {
            $this->addClass($className);
        }
    }

    // Вспомогательный метод для получения массива классов
    private function getClassArray()
    {
        $classString = $this->getAttribute('class') ?? '';
        return $classString === '' ? [] : explode(' ', $classString);
    }

    // Вспомогательный метод для установки строки классов
    private function setClassArray(array $classes)
    {
        $this->attributes['class'] = implode(' ', $classes);
    }
}
