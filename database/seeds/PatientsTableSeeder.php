<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('patients')->insert([
//            'Name' => Str::random(12),
//            'NRIC' => random(570301,991231).'-0'.random(2,9).'-'.random(1111,9999),
//            'MRN'  => Str::random(6),
//            'Sex'  => stream_context_set_option('Female','Male'),
//            'Height' => rand(1.50,2.00),
//            'Weight' => rand(35,129),
//            'Type' => stream_context_set_option('Lung','Breast','Lymphoma'),
//            'Smoking' => stream_context_set_option('Yes','No')
//        ]);
    }
}


