<?php

namespace App\Providers;

use App\Repositories\News\Contracts\NewsRepositoryContract;
use App\Repositories\News\NewsRepository;
use Illuminate\Support\ServiceProvider;

class NewsRepositoryServiceProvider extends ServiceProvider
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
            NewsRepositoryContract::class,
            NewsRepository:: class
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
            NewsRepositoryContract::class
        ];
    }
}
