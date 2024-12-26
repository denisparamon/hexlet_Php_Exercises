<?php

namespace App\actions;

use App\Models\Post;

class Posts
{
    public static function index($user, $limit)
    {
        // Используем скоупы для получения опубликованных постов и сортировки по количеству лайков
        return Post::published()
            ->mostLiked($limit) // Получаем топ-лайкнутых постов с лимитом
            ->get(); // Выполняем запрос и возвращаем коллекцию
    }
}
