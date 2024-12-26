<?php

namespace App\actions;

use App\Models\Post;

class Posts
{
    public static function index($user, $limit)
    {
        // Получаем все посты с ограничением
        $posts = Post::limit($limit)->get();

        // Получаем id постов, которые лайкнул пользователь
        $likedPostIds = $user->postLikes->pluck('post_id')->toArray();

        // Формируем коллекцию с добавлением флага liked
        $result = $posts->map(function ($post) use ($likedPostIds) {
            return [
                'post' => $post->toArray(),
                'liked' => in_array($post->id, $likedPostIds),
            ];
        });

        return $result;
    }
}
