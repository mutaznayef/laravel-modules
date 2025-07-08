<?php

namespace App\Modules\Excel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->mapModuleRoutes();
    }

    protected function mapModuleRoutes(): void
    {
        // Load web routes for all modules
        foreach (glob(app_path('Modules/*/Http/routes/web.php')) as $routeFile) {
            $module = basename(dirname(dirname($routeFile))); // e.g. Excel

            Route::middleware('web')
                ->namespace("App\\Modules\\{$module}\\Http\\Controllers")
                ->group($routeFile);
        }

        // Load api routes for all modules
        foreach (glob(app_path('Modules/*/Http/routes/api.php')) as $routeFile) {
            $module = basename(dirname(dirname($routeFile)));

            Route::prefix('api')
                ->middleware('api')
                ->namespace("App\\Modules\\{$module}\\Http\\Controllers")
                ->group($routeFile);
        }
    }
}
