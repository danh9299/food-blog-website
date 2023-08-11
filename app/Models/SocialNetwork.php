<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;
   protected $table = 'social_network';
    protected $fillable = ['Facebook','Github', 'Instagram'];
}
