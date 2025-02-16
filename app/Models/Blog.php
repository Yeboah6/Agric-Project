<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'blog_id',
        'author',
        'title',
        'message',
        'image',
        'video'
    ];
}
