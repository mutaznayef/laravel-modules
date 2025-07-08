<?php

namespace App\Console\Commands\Traits;

use Illuminate\Support\Facades\File;

trait ModuleGenerator
{
    /**
     * Get the current module name from the --module option.
     */
    protected function getModuleName(): ?string
    {
        return $this->option('module');
    }

    /**
     * Build and return the full path to the module folder, optionally appending a sub-path.
     * Ensures a trailing slash after subPath for proper path joining.
     */
    protected function modulePath(string $subPath = ''): string
    {
        $module = $this->getModuleName();

        if (!$module) {
            throw new \InvalidArgumentException('No module name provided via --module option.');
        }

        $base = app_path("Modules/{$module}");

        if ($subPath === '') {
            return $base;
        }

        // RETURN WITHOUT trailing slash!
        return $base . '/' . trim($subPath, '/');
    }

    /**
     * Create directory if it does not exist.
     */
    protected function ensureDirectory(string $path): void
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
    }

    /**
     * Check if a module exists (folder exists).
     */
    protected function moduleExists(string $module): bool
    {
        return File::exists(app_path("Modules/{$module}"));
    }
}
