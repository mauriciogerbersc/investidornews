<?php

namespace App\Providers;

use App\Services\Category\Contracts\CategoryServiceContract;
use App\Services\Category\CategoryService;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
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
            CategoryServiceContract::class,
            CategoryService:: class
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
            CategoryServiceContract::class
        ];
    }
}
