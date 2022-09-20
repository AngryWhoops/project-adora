<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'path',
        'post_id'
    ];

    /**
     *Пост, которому принадлежит картинка
     */
    protected function post()
    {
        $this->belongsTo(Post::class);
    }
}
