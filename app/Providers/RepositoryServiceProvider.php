<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\CategoryInterface;
use App\Repositories\CategoryClass;
use App\Repository\UserInterface;
use App\Repositories\UserClass;
use App\Repository\ProductInterface;
use App\Repositories\ProductClass;
use App\Repository\LoginAdminInterface;
use App\Repositories\LoginAdminClass;


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
        $this->app->bind(UserInterface::class, UserClass::class);
        $this->app->bind(ProductInterface::class, ProductClass::class);
        $this->app->bind(LoginAdminInterface::class, LoginAdminClass::class);
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
