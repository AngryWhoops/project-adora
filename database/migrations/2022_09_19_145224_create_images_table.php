<?php

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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')
                ->default(null)
                ->comment('Название картинки');
            $table->string('path')
                ->default('/Img/notfound.jpg')
                ->comment('Путь картинок');
            $table->foreignIdFor(Post::class, 'post_id')
                ->index()
                ->comment('Id поста, которому принадлежит картинка');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
