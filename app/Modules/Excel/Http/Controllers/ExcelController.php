<?php

namespace App\Modules\Excel\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Excel\Exports\ExampleExport;
use App\Modules\Excel\Services\ExcelImportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{


    /*
    ** Get the latest imported file details
    */

    public function index()
    {

        return response()->json([
            'imported' => DB::table('imports')->latest()->paginate(10)
        ]);
    }


    /**
     * function import .
     * Expects these inputs:
     *  - table:      name of the DB table
     *  - file:       the uploaded Excel/CSV file
     *  - rules:      validation rules
     */
    public function import(Request $request)
    {
        // $request->validate([
        //     'file'  => 'required|file|mimes:xlsx,xls,csv',
        //     'table' => 'required|string|',
        // ]);

        // $table = $request->input('table');
        // $file  = $request->file('file');


        // $result = ExcelImportService::import($table, $file);


        // return response()->json($result);
    }


    public function exportExample(Request $request)
    {
        $request->validate([
            'table' => 'required|string',
        ]);

        $table = $request->input('table');
        return Excel::download(new ExampleExport($table), $table . '_example.xlsx');
    }



    public function export()
    {
        return view('export');
    }
}
