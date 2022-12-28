<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\AboutRepositoryInterface;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\Interfaces\EventRepositoryInterface;
use App\Repository\Interfaces\PostRepositoryInterface;
use App\Repository\Interfaces\StatisticRepositoryInterface;
use App\Repository\Interfaces\TeamRepositoryInterface;
use App\Repository\Interfaces\FogRepositoryInterface;
use App\Repository\Interfaces\TalentRepositoryInterface;
use App\Repository\AboutRepository;
use App\Repository\CategoryRepository;
use App\Repository\EventRepository;
use App\Repository\PostRepository;
use App\Repository\StatisticRepository;
use App\Repository\TeamRepository;
use App\Repository\FogRepository;
use App\Repository\TalentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(StatisticRepositoryInterface::class, StatisticRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(FogRepositoryInterface::class, FogRepository::class);
        $this->app->bind(TalentRepositoryInterface::class, TalentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
