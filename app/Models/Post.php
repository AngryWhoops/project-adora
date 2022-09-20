<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'header',
        'text'
    ];

    /**
     * Пользователи, авторы постов
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     *Коментарии у поста
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Хештеги постов
     * @return HasMany
     */
    public function hashtags(): HasMany
    {
        return $this->hasMany(Hashtag::class);
    }

    /**
     *Картинки у постов
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Файлы поста
     * @return HasOne
     */
    public function files(): HasOne
    {
        return $this->hasOne(File::class);
    }
}
