
<?php

use App\Modules\Excel\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;


Route::get('export', [ExcelController::class, 'export']);

Route::get('/export-example', [ExcelController::class, 'exportExample'])->name('export.example');
