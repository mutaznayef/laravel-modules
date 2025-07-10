<?php

namespace App\Modules\Dashboard\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->publishes([
            __DIR__ . '/../Resources/public/admin/assets' => public_path('admin/assets'),
        ], 'admin-assets');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $modulePath = realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR;

        $this->loadRoutesFrom($modulePath . 'Http/routes/web.php');
        $this->loadRoutesFrom($modulePath . 'Http/routes/api.php');
        $this->loadViewsFrom($modulePath . 'Resources/views', 'Dashboard');
        $this->loadTranslationsFrom($modulePath . 'Resources/lang', 'Dashboard');
        $this->loadMigrationsFrom($modulePath . 'Database/Migrations');


        app()->setLocale(session('locale', config('app.locale')));

        Blade::component('Dashboard::layout._default', 'default-layout');
        Blade::component('Dashboard::layout._auth', 'auth-layout');
        Blade::component('Dashboard::layout._system', 'system-layout');

        Blade::componentNamespace('../Resources/views/components', 'Dashboard');

        // Blade::componentNamespace('Dashboard::components.menu.item', 'menu-item');
    }
}
