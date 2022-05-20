<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
//index
//Route::get('/subjects', 'SubjectController@index')->name('subjects.index');
//create
//Route::get('/subjects/create', 'SubjectController@create')->name('subjects.create');
//store
//Route::post('/subjects/store', 'SubjectController@store')->name('subjects.store');
//show or view
//Route::put('/subjects/{subject}', 'SubjectController@show')->name('subjects.show');
//edit
//Route::get('/subjects/{subject}/edit', 'SubjectController@edit')->name('subjects.edit');
//update
//Route::put('/subjects/{subject}', 'SubjectController@update')->name('subjects.update');
//delete or destroy
//Route::delete('/subjects/{subject}', 'SubjectController@destroy')->name('subjects.delete');
Route::resource('subjects', 'SubjectController');
Route::resource('teachers', 'TeacherController');
Route::resource('fee_trackers', 'FeeTrackerController');