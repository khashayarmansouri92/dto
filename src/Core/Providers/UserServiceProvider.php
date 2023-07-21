<?php

namespace Core\Providers;

use Core\Repositories\User\UserRepository;
use Core\Repositories\User\UserRepositoryInterface;
use Core\Services\User\UserService;
use Core\Services\User\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
