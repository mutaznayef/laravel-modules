<?php

use App\Modules\Excel\Services\ExcelExportService;
use App\Modules\Excel\Services\ExcelImportService;

if (!function_exists('import')) {
    /**
     * Helper function to call import method of ExcelImportService
     */
    function import($table, $file)
    {
        // Resolve ExcelService and call import

        return app(ExcelImportService::class)->import($table, $file);
    }
}


if (!function_exists('import')) {
    /**
     * Helper function to call export method of ExcelExportService
     */
    function export($table, $query = null)
    {
        // Resolve ExcelService and call export

        return app(ExcelExportService::class)->export($table, $query);
    }
}
