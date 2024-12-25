<?php

namespace App\actions;

use App\Models\Post;
use App\Models\PostLike;

class Posts
{
    public static function create($user, $params)
    {
        $post = new Post($params);
        $post->creator()->associate($user);
        $post->save();

        return $post;
    }

    public static function createLike($user, $post)
    {
        $like = new PostLike();
        $like->creator()->associate($user);
        $like->post()->associate($post);
        $like->save();

        return $like;
    }
}
