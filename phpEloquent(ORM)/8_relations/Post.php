<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class, 'post_id');
    }
}
