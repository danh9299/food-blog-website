<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'post_id';
    protected $fillable = ['title','meta', 'content','image', 'date_posted', 'author_id'];

    // Quan hệ n-1: Nhiều bài viết thuộc về một người dùng
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }

    // Quan hệ 1-n: Một bài viết có thể có nhiều bình luận
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
