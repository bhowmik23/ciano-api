<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards';
    protected $fillable = ['name', 'description', 'max_threads', 'max_replies', 'max_img_replies', 'is_nsfw'];
}
