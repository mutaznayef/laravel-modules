<?php

namespace App\Modules\Excel;

class Module
{
    public static function info(): array
    {
        return [
            'name' => 'Excel',
            'description' => 'Handles Excel import/export operations.',
            'version' => '1.0.0',
            'author' => 'Mutaz Nayef Saleh',
            'notes' => [
                'require' => 'maatwebsite/excel:^3.1',
                'run' => 'composer require "maatwebsite/excel:^3.1"',
                'run' => 'php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config'
            ]
        ];
    }
}
