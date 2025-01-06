<?php

namespace App;

class Guest
{
    // Метод для проверки, является ли объект гостем
    public function isGuest()
    {
        return true; // Гость всегда возвращает true
    }

    // Метод для получения имени гостя (или пустое имя, так как он гость)
    public function getName()
    {
        return 'Guest'; // Имя для гостя
    }
}
