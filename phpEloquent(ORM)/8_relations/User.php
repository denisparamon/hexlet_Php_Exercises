<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'first_name', 'last_name'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'creator_id');
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class, 'creator_id');
    }
}
