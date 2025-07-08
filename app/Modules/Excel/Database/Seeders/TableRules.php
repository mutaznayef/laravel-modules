<?php

namespace App\Modules\Excel\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableRules extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // That is just for example to create rules for tables that you want to import file to it.
        // $students = [
        //     'name'          => 'required|string|max:255',
        //     'email'         => 'required|email|unique:students,email',
        //     'phone'         => 'nullable|max:20',
        //     'gender'        => 'required|in:Male,Female,ذكر,أنثى',
        //     'date_of_birth' => 'required|date',
        //     'city'          => 'nullable|string|max:100',
        //     'address'       => 'nullable|string|max:255',
        //     'gpa'           => 'nullable|numeric|between:0,100',
        //     'major'         => 'nullable|string|max:100',
        // ];

        // $teachers = [
        //     'name'          => 'required|string|max:255',
        //     'email'         => 'required|email|unique:students,email',
        //     'phone'         => 'nullable|max:20',
        //     'gender'        => 'required|in:Male,Female,ذكر,أنثى',
        //     'date_of_birth' => 'required|date',
        //     'city'          => 'nullable|string|max:100',
        //     'address'       => 'nullable|string|max:255',
        //     'major'         => 'nullable|string|max:100',
        // ];

        // DB::table('table_rules')->insert([
        //     // ['table' => 'students', 'rules' => '{"name":"required|string|max:255","email":"required|email|unique:students,email","phone":"nullable|max:20","gender":"required|in:Male,Female,\u0630\u0643\u0631,\u0623\u0646\u062b\u0649","date_of_birth":"required|date","city":"nullable|string|max:100","address":"nullable|string|max:255","gpa":"nullable|numeric|between:0,100","major":"nullable|string|max:100"}']
        //     ['table' => 'students', 'rules' => json_encode($students)],
        //     ['table' => 'teachers', 'rules' => json_encode($teachers)]
        // ]);
    }
}
