<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/report', function () {
    return view('report', compact('patients'));
});

Route::get('/patients', function () {
    return view('patients');
});

Route::get('/addRecord', function () {
    return view('addRecord');
});

Route::get('/form_statdoses', function () {
    return view('form_statdoses');
});

Route::get('/new', function () {
    return view('new-patient');
});

//Route::get('/add', 'PatientController@index');

//---------------------Manage patients' data-------------------------------
//Route::get('/editP', function () {
//    return view('patients.edit_patient', ['id' => id]);
//});


//Route::get('add', 'PatientController@index')->name('temp'); //Route::get('URL','ControllerName@function')->name('routeName');

Route::resource('patient', 'PatientController')->names('addPatient'); //plural

//For controller that uses resource -> add is the hostname/'add'
//Route::resource('add', 'PatientController')->names('task');


//---------------------Manage doctors' data-------------------------------
//Route::get('/editS', function () {
//    return view('staff.edit_doctor', ['id' => id]);
//});

//Route::get('add_doc', 'DoctorController@index')->name('temp'); //Route::get('URL','ControllerName@function')->name('routeName');

Route::resource('staff', 'DoctorController')->names('addStaff'); //plural
