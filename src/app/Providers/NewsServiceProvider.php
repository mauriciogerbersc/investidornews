<?php

namespace App\Providers;

use App\Services\News\Contracts\NewsServiceContract;
use App\Services\News\NewsService;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            NewsServiceContract::class,
            NewsService:: class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function provides()
    {
        return [
            NewsServiceContract::class
        ];
    }
}
