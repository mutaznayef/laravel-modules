<?php

namespace App\Providers;

use App\Modules\Excel\Providers\ExcelServiceProvider;
use App\Modules\Excel\Providers\RouteServiceProvider;
use Illuminate\Database\Migrations\MigrationCreator;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MigrationCreator::class, function ($app) {
            // tell MigrationCreator where to find the published stubs
            $stubPath = base_path('stubs');
            return new MigrationCreator($app->make(Filesystem::class), $stubPath);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->register(ExcelServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
