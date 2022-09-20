<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hashtag extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'hashtags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];


    /**
     *Посты хештега, многие ко многим
     * @return BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
