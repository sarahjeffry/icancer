<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

//$factory->define(Patient::class, function (Faker $faker) {
//    return [
//        'Name' => $faker->name,
//        'NRIC' => $faker->bankAccountNumber,
////        'NRIC' => random(570301,991231).'-0'.random(2,9).'-'.random(1111,9999),
//        'MRN'  => $faker->randomLetter,
//        'Sex'  => $faker->randomElements('Male', 'Female'),
//        'Height' => $faker->randomFloat(1.43,1.80),
//        'Weight' => $faker->randomFloat(43,120),
//        'Type' => $faker->randomElements('Lung','Breast','Lymphoma'),
//        'Smoking' => $faker->randomElements('Yes','No')
//    ];
//});

$factory->define(Faker\Provider\en_US\Person::create, function (Faker $faker) {
    return [
        'id' => $faker->idNumber,
        'Name' => $faker->name, //name=column name in database
        'NRIC' => $faker->nationalIdNumber,
        'MRN' => $request->MRN,
        'Sex' => $faker->randomElement($array = array ('Male','Female')),
        'Height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1.43, $max = 1.87),
        'Weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 45.6, $max = 90.4),
        'BMI' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 18.9, $max = 32.1),
        'Type' => randomElement($array = array ('Lung', 'Breast', 'Lymphoma')),
        'Smoking' => randomElement($array = array ('No','Yes'))
    ];
});
