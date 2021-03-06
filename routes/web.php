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
    return view('/Macharia/welcome');
});


Route::get('/Macharia/students','StudentsController@create');

 Route::post('/Macharia/students/store','StudentsController@store');

 Route::get('/Macharia/fees','FeesController@create');

 Route::post('/Macharia/fees/store','FeesController@store');

 Route::get('/Macharia/allStudents', 'StudentsController@index');

 Route::post('students/search', 'StudentsController@search');

 Route::get('/Macharia/totalFees', 'FeesController@index');

