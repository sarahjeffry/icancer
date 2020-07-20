<?php

use App\Patient;
use App\User;

Auth::routes();

Route::get('/', function () {

    if(Auth::check()) {
//        return View::make('welcome')->with('role', '$user');
        return view('welcome');
    }

    else {
        return view('auth.login');
    }


});

Route::get('/home', function () {

    if(Auth::check()) {
        $users = User::all();
        return view('welcome');
//        return view('welcome', ['role' => 2]);
//        Route::resource('welcome', 'UserController')->names('welcome'); //plural
    }

    else {
        return view('auth.login');
    }
});

//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/report', function () {

    if(Auth::check()) {
//        return View::make('welcome')->with('role', '$user');

        $patients = Patient::all();
        return view('report', compact('patients'));
    }

    else {
        return view('auth.login');
    }

});


Route::get('/patients', function () {
    $patients = Patient::all();
//    if(Auth::check()) {
//
//        return view('patients.new_patient', ['patients' => $patients]);
//    }
//
//    else {
//        return view('auth.login');
//    }

    return view('patients.new_patient', ['patients' => $patients]);

});


/*
|--------------------------------------------------------------------------
| FORMS
|--------------------------------------------------------------------------
*/

Route::get('/addRecord', function () {   //Menu forms
    $patient = Patient::all();

    return view('addRecord', compact(patient));
});

Route::get('/form_statdoses', 'statdosesController@index');
Route::resource('form_statdoses', 'statDosesController')->names('addStatDoses');

Route::get('/form_statdoses', function () {
    return view('forms.form_statdoses');
});

Route::get('/form_oral', function () {
    return view('forms.form_oral');
});

Route::get('/form_premedication', function () {
    return view('forms.form_premedication');
});

Route::get('/form_injection', function () {
    return view('forms.form_injection');
});

Route::get('/form_procedure', function () {
    return view('forms.form_procedure');
});

Route::get('/form_infusion', function () {
    return view('forms.form_infusion');
});

Route::get('/form_premedication', function () {
    return view('forms.form_premedication');
});

Route::get('/form_topical', function () {
    return view('forms.form_topical');
});

/*
|--------------------------------------------------------------------------
| PATIENTS
|--------------------------------------------------------------------------
*/

Route::get('/new', function () {
    return view('patients.new_patient');
});

//Route::get('/add', 'PatientController@index');

//---------------------Manage patients' data-------------------------------
//Route::get('/editP', function () {
//    return view('patients.edit_patient', ['id' => id]);
//});


//Route::get('add', 'PatientController@index')->name('temp'); //Route::get('URL','ControllerName@function')->name('routeName');

Route::resource('patient', 'PatientController')->names('addPatient'); //plural. addPatient -> ada kat view
Route::resource('treatment', 'TreatmentController')->names('addTreatment'); //plural. addPatient -> ada kat view

//For controller that uses resource -> add is the hostname/'add'
//Route::resource('add', 'PatientController')->names('task');


//---------------------Manage doctors' data-------------------------------
//Route::get('/editS', function () {
//    return view('staff.edit_doctor', ['id' => id]);
//});

//Route::get('add_doc', 'DoctorController@index')->name('temp'); //Route::get('URL','ControllerName@function')->name('routeName');

//Route::resource('staff', 'DoctorController')->names('addStaff'); //plural

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

Route::get('/find', function() {

    $patients = Patient::all();

    foreach($patients as $patient) {

        return $patient->Name.' with ID '.$patient->id;
    }

});
