<?php

use App\Models\Post;
use App\Models\User;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('text')
                ->comment("Текст комментария");
            $table->foreignIdFor(User::class, 'user_id')
                ->index()
                ->comment('ID автора коментария');
            $table->foreignIdFor(Post::class, 'post_id')
                ->default(null)
                ->index()
                ->comment('Id поста, которому принадлежит коментарий');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
