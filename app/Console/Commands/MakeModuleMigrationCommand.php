<?php

namespace App\Console\Commands;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand;
use Illuminate\Database\Migrations\MigrationCreator;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use App\Console\Commands\Traits\ModuleGenerator;
use Illuminate\Support\Composer;

class MakeModuleMigrationCommand extends MigrateMakeCommand
{
    use ModuleGenerator;

    /**
     * Override the full signature to include --module
     */
    protected $signature = 'make:migration
                            {name : The name of the migration}
                            {--create= : The table to be created}
                            {--table= : The table to migrate}
                            {--path= : The location where the migration file should be created}
                            {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
                            {--fullpath : Output the full path of the migration}
                            {--module= : The module to place the migration in}';

    protected $description = 'Create a new migration file (or into a module with --module)';

    /**
     * Match parent constructor signature so dependencies resolve correctly.
     */
    public function __construct(MigrationCreator $creator, Composer $composer)
    {
        parent::__construct($creator, $composer);
    }

    /**
     * Use your published stub
     */
    protected function getStub()
    {
        return base_path('stubs/migration.create.stub');
    }

    /**
     * Override the migration path if --module is present
     */
    protected function getMigrationPath()
    {
        if ($module = $this->option('module')) {
            if (! $this->moduleExists($module)) {
                $this->error("Module [{$module}] does not exist.");
                exit(1);
            }
            return $this->modulePath($module, 'Database/Migrations');
        }

        return parent::getMigrationPath();
    }
}
