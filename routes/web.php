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

Route::resource('subjects', 'SubjectController');
Route::resource('teachers', 'TeacherController');
Route::resource('fee_trackers', 'FeeTrackerController');
Route::resource('users', 'UserController');
Route::resource('guardians', 'GuardianController');
Route::get('test', function () {

    $user = [
        'name' => 'MONTHLY JMF PROGRAME FEE',
        'role' => 'guardian'
    ]; //nanti remove

    \Mail::to('kaqilah2@gmail.com')->send(new \App\Mail\NewMail($user));

    dd("success");

});
Route::resource('students', 'StudentController');