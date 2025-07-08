<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;

class MakeModuleConfigCommand extends Command
{
    protected $name = 'make:config';
    protected $description = 'Create a new config file for a module';

    public function handle()
    {
        $module = $this->option('module');
        $name = Str::snake($this->argument('name'));

        if (!$module) {
            $this->error('--module option is required.');
            return;
        }

        $path = base_path("app/Modules/{$module}/Config");
        $file = "{$path}/{$name}.php";

        if (file_exists($file)) {
            $this->error("Config file already exists: {$file}");
            return;
        }

        (new Filesystem)->ensureDirectoryExists($path);

        file_put_contents($file, $this->getStubContent($name));

        $this->info("Created config: {$file}");
    }

    protected function getStubContent(string $name): string
    {
        return <<<PHP
<?php

return [
    // '{$name}' module config
];
PHP;
    }

    protected function getArguments()
    {
        return [
            ['name', InputOption::VALUE_REQUIRED, 'The config file name'],
        ];
    }

    protected function getOptions()
    {
        return [
            ['module', null, InputOption::VALUE_REQUIRED, 'The module to put the config in'],
        ];
    }
}
