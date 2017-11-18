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

Route::auth();
Route::get('/', 'SiteController@login');
Route::get('dashboard', ['uses'=>'SiteController@dashboard']);
Route::get('profile', ['uses'=>'SiteController@profile']);
Route::get('report', ['uses'=>'SiteController@reports']);
Route::get('test', ['uses'=>'SiteController@test']);
Route::get('viewPatientRecords', ['uses'=>'SiteController@viewPatientRecords']);
Route::get('newPatient', ['uses'=>'PatientController@newPatientRecord']);
Route::get('viewCheckupRecords',['uses'=>'SiteController@viewCheckupRecords']);
Route::get('newDiagnosis/{id}', ['uses'=>'PatientController@newRecordDiagnosis']);
Route::get('/profile/{id}','PatientController@viewProfile');
Route::get('/checkup/{id}',['uses'=>'PatientController@addCheckupRecord']);
Route::get('/viewCheckupRecord/{id}', ['uses'=>'PatientController@viewCheckupRecord']);
Route::get('/testTable/{id}', ['uses'=>'PatientController@testTable']);
Route::post('store','PatientController@store');
Route::post('storeCheckup','PatientController@storeCheckupRecord');
Route::post('saveDiagnosis','PatientController@saveDiagnosis');
Route::post('show','PatientController@show');



