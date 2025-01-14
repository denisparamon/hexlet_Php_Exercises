<?php

namespace App;

class Base
{
    public function isInstanceOf($className)
    {
        // Получаем имя текущего класса
        $currentClass = get_class($this);

        // Проверяем, совпадает ли имя текущего класса с $className
        if ($currentClass === $className) {
            return true;
        }

        // Получаем массив всех родительских классов
        $parents = class_parents($this);

        // Проверяем, содержится ли $className в массиве родителей
        return in_array($className, $parents);
    }
}
