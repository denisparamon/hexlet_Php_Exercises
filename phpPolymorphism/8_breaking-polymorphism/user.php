<?php

namespace App;

class User
{
    private $name;

    // Конструктор для инициализации имени пользователя
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Метод для проверки, является ли объект гостем (пользователь не гость)
    public function isGuest()
    {
        return false; // Пользователь всегда возвращает false
    }

    // Метод для получения имени пользователя
    public function getName()
    {
        return $this->name; // Возвращаем имя пользователя
    }
}
