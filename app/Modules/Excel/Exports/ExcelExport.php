<?php

namespace App\Modules\Excel\Exports;

use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExport implements FromQuery, WithHeadings
{
    public function __construct(
        protected EloquentBuilder|QueryBuilder|null $query,
        protected string $table
    ) {}

    public function query()
    {
        $query = $this->query ?? DB::table($this->table);

        if (empty($query->orders ?? [])) {
            $firstColumn = Schema::getColumnListing($this->table)[0] ?? 'id';
            $query->orderBy($firstColumn);
        }

        return $query;
    }

    public function headings(): array
    {
        return Schema::getColumnListing($this->table);
    }
}
