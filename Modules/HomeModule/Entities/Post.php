<?php

namespace Modules\HomeModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'path',
        'author',
        'idcategory',
    ];
    
    protected static function newFactory()
    {
        return \Modules\HomeModule\Database\factories\PostFactory::new();
    }
}
