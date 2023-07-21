<?php

namespace Core\Providers;

use Core\Services\FakeData\FakeDataService;
use Core\Services\FakeData\FakeDataServiceInterface;
use Illuminate\Support\ServiceProvider;

class FakeDataServiceProvider extends ServiceProvider
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
        $this->app->bind(FakeDataServiceInterface::class, FakeDataService::class);
    }
}
