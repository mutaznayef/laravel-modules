<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListModulesCommand extends Command
{
    protected $signature = 'module:list';
    protected $description = 'List all application modules with their status';

    public function handle()
    {
        $modulePath = app_path('Modules');

        if (!File::exists($modulePath)) {
            $this->error('Modules directory not found.');
            return;
        }

        $modules = File::directories($modulePath);

        if (empty($modules)) {
            $this->warn('No modules found.');
            return;
        }

        $rows = [];

        foreach ($modules as $moduleDir) {
            $name = basename($moduleDir);
            $jsonPath = $moduleDir . '/module.json';

            if (!File::exists($jsonPath)) {
                $rows[] = [$name, '❓ Unknown', '❌ Missing module.json'];
                continue;
            }

            $data = json_decode(File::get($jsonPath), true);
            $enabled = $data['enabled'] ?? false;
            $desc = $data['description'] ?? '-';
            $status = $enabled ? '✅ Enabled' : '❌ Disabled';

            $rows[] = [$name, $status, $desc];
        }

        $this->table(['Module', 'Status', 'Description'], $rows);
    }
}
