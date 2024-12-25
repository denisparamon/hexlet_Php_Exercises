<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $fillable = ['creator_id', 'post_id'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
