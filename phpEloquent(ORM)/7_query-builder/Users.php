<?php

namespace App\Actions;

use App\Models\User;

class Users
{
    public static function index($params = [])
    {
        // Инициализируем запрос
        $query = User::query();

        // Обработка фильтрации (q)
        if (isset($params['q']) && is_array($params['q'])) {
            $query->where(function ($subQuery) use ($params) {
                foreach ($params['q'] as $field => $value) {
                    $subQuery->orWhere($field, '=', $value);
                }
            });
        }

        // Обработка сортировки (s)
        if (isset($params['s'])) {
            [$field, $direction] = explode(':', $params['s']);
            $query->orderBy($field, $direction);
        }

        // Возвращаем отфильтрованный список пользователей
        return $query->get();
    }
}
