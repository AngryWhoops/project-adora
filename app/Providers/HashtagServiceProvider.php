<?php

namespace App\Providers;

use App\Interfaces\HashtagServiceInterface;
use App\Services\HashtagService;
use Illuminate\Support\ServiceProvider;

class HashtagServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            HashtagServiceInterface::class,
            HashtagService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
