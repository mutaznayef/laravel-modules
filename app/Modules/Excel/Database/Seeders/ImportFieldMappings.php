<?php

namespace App\Modules\Excel\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImportFieldMappings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // That is just for test to show you how you can add that key and value for table that you want to import to work with english and arabic
        /* 
        
        $students = [
            'الاسم' => 'name',
            'الجنس' => 'gender',
            'تاريخ_الميلاد' => 'date_of_birth',
            'البريد_الإلكتروني' => 'email',
            'الايميل' => 'email',
            'رقم_الهاتف' => 'phone',
            'الهاتف' => 'phone',
            'المدينة' => 'city',
            'العنوان' => 'address',
            'المعدل' => 'gpa',
            'التخصص' => 'major',
        ];

        $teachers = [
            'الاسم' => 'name',
            'الجنس' => 'gender',
            'تاريخ_الميلاد' => 'date_of_birth',
            'البريد_الإلكتروني' => 'email',
            'الايميل' => 'email',
            'رقم_الهاتف' => 'phone',
            'الهاتف' => 'phone',
            'المدينة' => 'city',
            'العنوان' => 'address',
            'التخصص' => 'major',
        ];


        DB::table('import_field_mappings')->insert([
            ['table' => 'students', 'field_mapping' => json_encode($students)],
            ['table' => 'teachers', 'field_mapping' => json_encode($teachers)]
        ]);
        */
    }
}
