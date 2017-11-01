<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SiteController@login');
Route::get('dashboard', ['uses'=>'SiteController@dashboard']);
Route::get('profile', ['uses'=>'SiteController@profile']);
Route::get('test', ['uses'=>'SiteController@test']);
Route::get('viewPatientRecords', ['uses'=>'SiteController@viewPatientRecords']);
Route::get('newPatient', ['uses'=>'PatientController@newPatientRecord']);
Route::post('store','PatientController@store');
Route::post('show','PatientController@show');

Route::auth();


