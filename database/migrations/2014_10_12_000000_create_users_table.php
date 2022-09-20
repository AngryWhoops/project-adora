<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()
                ->comment('Первичный ключ');
            $table->string('name')
                ->index()
                ->comment('Имя пользователя');
            $table->string('email')->unique()->comment('Email почта пользователя');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('Хеш пароля пользователя');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignIdFor(Post::class, 'post_id')
                ->nullable()
                ->default(null)
                ->index()
                ->comment("Посты пользователя");
            $table->foreignIdFor(Comment::class, 'comment_id')
                ->nullable()
                ->default(null)
                ->index()
                ->comment("Коментарии пользователя");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
