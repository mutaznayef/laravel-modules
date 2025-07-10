<?php

namespace App\Modules\Dashboard;

class Module
{
    public static function info(): array
    {
        return [
            'name' => 'Dashboard Module',
            'description' => 'Starter Kit for Frontend views.',
            'version' => '1.0.0',
            'author' => 'Mutaz Nayef Saleh',
            'notes' => [
                'run' => 'php artisan vendor:publish --tag=admin-assets'
            ]
        ];
    }
}
