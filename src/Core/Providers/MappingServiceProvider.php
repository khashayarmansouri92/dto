<?php

namespace Core\Providers;

use Core\Services\Mapping\MappingService;
use Core\Services\Mapping\MappingServiceInterface;
use Illuminate\Support\ServiceProvider;

class MappingServiceProvider extends ServiceProvider
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
        $this->app->bind(MappingServiceInterface::class, MappingService::class);
    }
}
