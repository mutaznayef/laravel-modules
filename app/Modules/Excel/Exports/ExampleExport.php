<?php

namespace App\Modules\Excel\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExampleExport implements FromCollection, WithHeadings
{
    protected string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function collection(): Collection
    {
        $columns = $this->getTableColumns();
        return collect([
            array_fill_keys($columns, null), // One empty example row
        ]);
    }

    public function headings(): array
    {
        return $this->getTableColumns();
    }

    protected function getTableColumns(): array
    {
        if (!Schema::hasTable($this->table)) {
            return []; // Or throw an exception
        }

        // Get all columns
        $columns = DB::getSchemaBuilder()->getColumnListing($this->table);

        // Exclude timestamps
        return array_filter($columns, function ($column) {
            return !in_array($column, ['created_at', 'updated_at']);
        });
    }
}
