<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'reader-emails';
    
    protected $fillable = ['email'];
    use HasFactory;
}
