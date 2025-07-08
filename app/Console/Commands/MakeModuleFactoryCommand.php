<?php

namespace App\Console\Commands;

use App\Console\Commands\Traits\ModuleGenerator;
use Illuminate\Database\Console\Factories\FactoryMakeCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:factory')]
class MakeModuleFactoryCommand extends FactoryMakeCommand
{
    use ModuleGenerator;

    public function handle()
    {
        // Ensure the module directory exists
        if ($this->getModuleName()) {
            $this->ensureDirectory($this->modulePath('Database/Factories'));
        }

        return parent::handle();
    }

    protected function getPath($name)
    {
        if (!$this->getModuleName()) {
            return parent::getPath($name);
        }

        $className = class_basename($name);

        return $this->modulePath('Database/Factories') . '/' . $className . '.php';
    }

    protected function rootNamespace()
    {
        if (!$this->getModuleName()) {
            return parent::rootNamespace();
        }

        return 'App\\Modules\\' . $this->getModuleName() . '\\Database\\Factories';
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
