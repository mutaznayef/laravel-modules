<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeModuleCommand extends Command
{
    protected $signature = 'module:make {name}';
    protected $description = 'Create a new module';

    public function handle()
    {
        $name = ucfirst($this->argument('name'));
        $basePath = base_path("app/Modules/{$name}");

        if (File::exists($basePath)) {
            $this->error("Module {$name} already exists!");
            return;
        }

        // Create module folders
        $folders = [
            'Config',
            'Console',
            'Database/Migrations',
            'Database/Seeders',
            'Http/Controllers',
            'Models',
            'Resources/views',
        ];

        foreach ($folders as $folder) {
            File::makeDirectory("{$basePath}/{$folder}", 0755, true);
        }

        // Create route file
        File::put("{$basePath}/Http/routes.php", "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\nRoute::get('/', function () {\n    return 'Hello from {$name} module!';\n});");

        // Create module.json
        File::put("{$basePath}/module.json", json_encode([
            'name' => $name,
            'enabled' => true
        ], JSON_PRETTY_PRINT));

        $this->info("Module {$name} created successfully.");
    }
}
