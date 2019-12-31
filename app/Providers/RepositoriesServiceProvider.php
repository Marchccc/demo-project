<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     */
    public function boot()
    {
    }

    /**
     * 绑定系统业务逻辑服务
     */
    public function register()
    {
        // 产品业务
        $this->app->bind(\App\Repositories\Interfaces\ProductRepositoryInterface::class, \App\Repositories\ProductRepository::class);

        // 用户业务
        $this->app->bind(\App\Repositories\Interfaces\UserRepositoryInterface::class, \App\Repositories\UserRepository::class);
    }
}
