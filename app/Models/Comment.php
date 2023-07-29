<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey = 'comment_id';
    protected $fillable = ['text', 'date_commented', 'author_id', 'post_id'];

    // Quan hệ n-1: Một bình luận thuộc về một người dùng
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Quan hệ n-1: Một bình luận thuộc về một bài viết
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
