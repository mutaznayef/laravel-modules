<?php

namespace App\Modules\Excel\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FailedRowsExport implements FromArray, WithHeadings
{
    protected array $failedRows;

    public function __construct(array $failedRows)
    {
        $this->failedRows = $failedRows;
    }

    public function array(): array
    {
        return array_map(function ($row) {
            return array_merge($row['data'], [
                'error' => implode("; ", is_array($row['error']) ? flatten_array($row['error']) : [$row['error']]),
                'row_number' => $row['row'],
            ]);
        }, $this->failedRows);
    }

    public function headings(): array
    {
        if (empty($this->failedRows)) return [];
        $first = $this->failedRows[0]['data'];
        return array_merge(array_keys($first), ['error', 'row_number']);
    }
}

function flatten_array(array $array): array
{
    return array_reduce($array, function ($carry, $item) {
        return array_merge($carry, is_array($item) ? flatten_array($item) : [$item]);
    }, []);
}
