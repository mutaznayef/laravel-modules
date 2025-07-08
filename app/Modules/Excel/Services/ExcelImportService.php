<?php

namespace App\Modules\Excel\Services;

use App\Modules\Excel\Exports\FailedRowsExport;
use App\Modules\Excel\Imports\ExcelImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Context;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class ExcelImportService
{


    /*
    ** use ExcelImport import method for import file and store the needed data in database and storage folder
    */

    public static function import(string $table, UploadedFile $imported_file): array
    {

        // get the key mapping to map with columns attributes then normalize them to make them acceptable to work good
        $map = Context::get("key_{$table}_mapping");

        HeadingRowFormatter::extend('custom', function ($value)  use ($map) {
            $key = Str::lower(str_replace(' ', '_', trim($value)));
            return $map[$key]  ??  $key;
        });

        HeadingRowFormatter::default('custom');

        // get rules to validate the entered attributes

        $rules = Context::get("rules_{$table}");

        // get instance of excelimport import file 

        $import = new ExcelImport($table, $rules);

        // Import the uploaded file
        Excel::import($import, $imported_file);

        // Save the uploaded file
        $imported_file_name = pathinfo($imported_file->getClientOriginalName(), PATHINFO_FILENAME)
            . '_' . Str::random(8) . '.' . $imported_file->getClientOriginalExtension();

        $imported_file_path = 'imported_files/' . $imported_file_name;

        Storage::disk('public')->putFileAs(
            'imported_files',
            $imported_file,
            $imported_file_name
        );

        $failed_rows_path = null;

        // Export failed rows if any

        if (count($import->failedRows) > 0) {

            $failed_rows = new FailedRowsExport($import->failedRows);
            $fileName = 'failed_row_' . Str::random(8) . '.xlsx';
            $failed_rows_path = 'failed_rows_files/' . $fileName;

            Excel::store($failed_rows, $failed_rows_path, 'public');
        }

        // Save to DB
        $id = DB::table('imports')->insertGetId([
            'imported_by' => Auth::id(),
            'file_name' => $fileName,
            'imported_file' => $imported_file_path,
            'success_rows_count' => $import->successRowsCount,
            'failed_rows_count' => count($import->failedRows),
            'failed_rows_file' => $failed_rows_path,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return [
            'status' => 'success',
            'imported' => $import->successRowsCount,
            'failed' => $import->failedRows,
            'import_id' => $id,
        ];
    }
}
