<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUser extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;
    public $table = 'post_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'post_id',
        'user_id',
    ];
}
