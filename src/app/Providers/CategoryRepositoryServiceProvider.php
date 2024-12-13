<?php

namespace App\Providers;

use App\Repositories\Category\Contracts\CategoryRepositoryContract;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class CategoryRepositoryServiceProvider extends ServiceProvider
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
            CategoryRepositoryContract::class,
            CategoryRepository:: class
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
            CategoryRepositoryContract::class
        ];
    }
}
