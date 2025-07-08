<?php

namespace App\Console\Commands;

use App\Console\Commands\Traits\ModuleGenerator;
use Illuminate\Database\Console\Seeds\SeederMakeCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:seeder')]
class MakeModuleSeederCommand extends SeederMakeCommand
{
    use ModuleGenerator;

    public function handle()
    {
        // Auto-create directory if module is specified
        if ($this->getModuleName()) {
            $this->ensureDirectory($this->modulePath('Database/Seeders'));
        }

        return parent::handle();
    }

    protected function getPath($name)
    {
        if (!$this->getModuleName()) {
            return parent::getPath($name);
        }

        $className = class_basename($name);

        // Compose full file path WITHOUT extra slash at end
        return $this->modulePath("Database/Seeders") . '/' . $className . '.php';
    }


    protected function rootNamespace()
    {
        if (!$this->getModuleName()) {
            return parent::rootNamespace();
        }

        return 'App\\Modules\\' . $this->getModuleName() . '\\Database\\Seeders\\';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }

    protected function getOptions()
    {
        return array_merge(parent::getOptions(), [
            ['module', null, \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Module name'],
        ]);
    }
}
