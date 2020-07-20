<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Patient', 10)->create();
//        factory(\App\Patient::class,10)->create()->each(function ($patient) {
//
//            $patient->
//        });
//        $this->call(PatientsTableSeeder::class);
//
//        DB::table('patients')->insert([
//            'Name' => Str::random(12),
//            'NRIC' => rand(570301,991231).'-0'.rand(2,9).'-'.rand(1111,9999),
//            'MRN'  => Str::random(6),
//            'Sex'  => rand,
//            'Height' => rand(1.50,2.00),
//            'Weight' => rand(35,129),
//            'Type' => array_rand('Lung','Breast','Lymphoma'),
//            'Smoking' => array_rand('Yes','No')
//        ]);
    }
}
