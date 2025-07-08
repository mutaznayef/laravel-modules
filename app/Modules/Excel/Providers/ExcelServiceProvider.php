<?php

namespace App\Modules\Excel\Providers;

use App\Modules\Excel\Services\ExcelImportService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\DB;


class ExcelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ExcelImportService::class
        );
        $helperPath = app_path('Modules/Excel/Helpers/helpers.php');
        if (file_exists($helperPath)) {
            require_once $helperPath;
        }
        $this->mergeConfigFrom(
            app_path('Modules/Excel/Config/excel.php'),
            'excel'
        );
    }

    public function boot()
    {

        $modulePath = __DIR__ . '/../';

        // Register views with namespace 'excel'
        $this->loadViewsFrom($modulePath . 'Resources/views', 'excel');

        // Register translations with namespace 'excel'
        $this->loadTranslationsFrom($modulePath . 'Resources/lang', 'excel');

        // Register migrations to be discovered by artisan migrate
        $this->loadMigrationsFrom($modulePath . 'Database/Migrations');


        // Get all table rules from database and store them in context
        // $tableRules = DB::table('table_rules')->get();

        // foreach ($tableRules as $tableRule) {

        //     $tableName = $tableRule->table;

        //     $rules = json_decode($tableRule->rules, true);

        //     // Add the rules to the Context with a key based on the table name
        //     Context::add("rules_{$tableName}", $rules);
        // }


        // // Get all table field mapping from database and store them in context

        // $key_mapping_tables = DB::table('import_field_mappings')->get();

        // foreach ($key_mapping_tables as $key_mapping_table) {

        //     $tableName = $key_mapping_table->table;

        //     $map = json_decode($key_mapping_table->field_mapping, true);

        //     // Add the rules to the Context with a key based on the table name
        //     Context::add("key_{$tableName}_mapping", $map);
        // }
    }
}
