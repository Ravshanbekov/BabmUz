<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Repository\Interfaces\SliderRepositoryInterface;
// use App\Repository\SliderRepository;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //  $this->app->bind(SliderRepositoryInterface::class, SliderRepository::class);
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
