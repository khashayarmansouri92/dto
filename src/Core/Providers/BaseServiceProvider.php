<?php

namespace Core\Providers;

use Core\Repositories\BaseRepository;
use Core\Repositories\BaseRepositoryInterface;
use Core\Services\BaseService;
use Core\Services\BaseServiceInterface;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
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
        $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }
}
