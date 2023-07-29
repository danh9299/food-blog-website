<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'author_id';
    protected $fillable = ['username', 'email'];

    // Quan hệ 1-n: Một người dùng có thể có nhiều bài viết
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Quan hệ 1-n: Một người dùng có thể có nhiều bình luận
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
