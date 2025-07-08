<?php

namespace App\Modules\Excel\Imports;


use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ExcelImport implements
    ToCollection,
    WithHeadingRow,
    WithBatchInserts,
    WithChunkReading
{

    protected string $table;
    protected array $rules;
    public array $failedRows = [];
    public int $successRowsCount = 0;


    public function __construct(string $table, array $rules)
    {
        if (!Schema::hasTable($table)) {
            throw new \InvalidArgumentException("Table '{$table}' does not exist.");
        }

        $this->rules = $rules;
        $this->table = $table;
    }

    public function collection(Collection $rows): void
    {

        $columns = Schema::getColumnListing($this->table);

        foreach ($rows as $index => $row) {
            $rowNumber = $index + 2;
            $data = $row->toArray();

            $filtered = array_filter(
                $data,
                fn($v, $k) => in_array($k, $columns),
                ARRAY_FILTER_USE_BOTH
            );
            try {
                Validator::make($filtered, $this->rules)->validate();

                DB::table($this->table)->insert(array_merge($filtered, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));

                $this->successRowsCount++;
            } catch (ValidationException $e) {
                $this->failedRows[] = [
                    'row' => $rowNumber,
                    'error' => $e->errors(),
                    'data' => $filtered,
                ];
            } catch (\Throwable $e) {
                $this->failedRows[] = [
                    'row' => $rowNumber,
                    'error' => [$e->getMessage()],
                    'data' => $filtered,
                ];
            }
        }
    }


    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
