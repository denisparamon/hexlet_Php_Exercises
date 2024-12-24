<?php

namespace App\actions;

use App\Models\User;

class Users
{
    public static function create($params)
    {
        // Отделяем пароль от остальных параметров
        $password = password_hash($params['password'], PASSWORD_DEFAULT);

        // Создаем пользователя с использованием массового заполнения
        $user = User::create([
            'first_name' => $params['first_name'],
            'last_name'  => $params['last_name'],
            'email'      => $params['email'],
        ]);

        // Устанавливаем пароль отдельно, так как он должен быть зашифрован
        $user->password = $password;
        $user->save();

        return $user;
    }

    public static function update($id, $params)
    {
        // Находим пользователя или выбрасываем исключение
        $user = User::findOrFail($id);

        // Если пароль передан, хешируем его и устанавливаем отдельно
        if (isset($params['password'])) {
            $user->password = password_hash($params['password'], PASSWORD_DEFAULT);
            unset($params['password']);
        }

        // Обновляем пользователя с использованием массового заполнения
        $user->update($params);

        return $user;
    }
}
