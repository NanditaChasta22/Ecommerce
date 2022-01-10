<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\CategoryInterface;
use App\Repositories\CategoryClass;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(CategoryInterface::class, CategoryClass::class);
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
