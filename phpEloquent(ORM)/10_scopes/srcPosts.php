<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'state', 'likes_count']; // Обратите внимание на likes_count

    public function creator()
    {
        return $this->belongsTo(__NAMESPACE__ . '\User', 'creator_id');
    }

    public function posts()
    {
        return $this->hasMany(__NAMESPACE__ . '\Post', 'creator_id');
    }

    public function likes()
    {
        return $this->hasMany(__NAMESPACE__ . '\PostLike');
    }

    // Скоуп для фильтрации опубликованных постов
    public function scopePublished($query)
    {
        return $query->where('state', 'published');
    }

    // Скоуп для получения самых залайканных постов с лимитом
    public function scopeMostLiked($query, $limit)
    {
        return $query->orderBy('likes_count', 'desc')->limit($limit);
    }
}
