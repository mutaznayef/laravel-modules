<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use App\Console\Commands\Traits\ModuleGenerator;

class MakeModuleServiceCommand extends GeneratorCommand
{
    use ModuleGenerator;

    protected $name = 'make:service';
    protected $description = 'Create a new service class for a module';
    protected $type = 'Service';

    protected function getStub()
    {
        return base_path('stubs/service.stub');
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $module = $this->option('module');
        return "App\\Modules\\{$module}\\Services";
    }

    protected function getPath($name)
    {
        $module = $this->option('module');

        if (!$module) {
            return parent::getPath($name);
        }

        if (!$this->moduleExists($module)) {
            $this->error("Module [{$module}] does not exist.");
            exit(1);
        }

        $name = str_replace($this->getDefaultNamespace('App\\'), '', $name);
        $path = $this->modulePath($module, 'Services') . '/' . str_replace('\\', '/', $name) . '.php';

        $this->ensureDirectory(dirname($path));
        return $path;
    }

    protected function getOptions()
    {
        return array_merge(parent::getOptions(), [
            ['module', null, InputOption::VALUE_REQUIRED, 'The name of the module'],
        ]);
    }
}
