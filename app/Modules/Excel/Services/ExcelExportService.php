<?php

namespace App\Modules\Excel\Services;


use App\Modules\Excel\Exports\ExcelExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class ExcelExportService
{


    /*
    ** use ExcelImport import method for import file and store the needed data in database and storage folder
    */

    public static function export(string $table, $query)
    {
        // Generate a unique filename
        $fileName = $table . '_export_' . Str::random(8) . '.xlsx';

        // File path (inside /storage/app/public/exported_files)
        $filePath = 'exported_files/' . $fileName;

        // Store the file on disk
        Excel::store(new ExcelExport($query, $table), $filePath, 'public');

        // Save to DB
        DB::table('exports')->insert([
            'user_id'    => Auth::id(),
            'file_name'      => $fileName,
            'exported_file'  => $filePath,
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        // Return as downloadable response
        return response()->download(storage_path('app/public/' . $filePath));
    }
}
