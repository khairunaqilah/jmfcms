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

Route::resource('users', 'UserController');
Route::get('/list', 'StudentSubjectController@list')->name('students_subjects.list');
Route::get('/text','FeeTrackerController@text')->name('text');
Route::get('/send','FeeTrackerController@send')->name('fee_trackers.send');
Route::resource('subjects', 'SubjectController');
Route::resource('teachers', 'TeacherController');
Route::resource('fee_trackers', 'FeeTrackerController');

Route::resource('guardians', 'GuardianController');
Route::resource('students', 'StudentController');
Route::resource('groups', 'GroupController');
Route::resource('lessonschedules', 'LessonScheduleController');
Route::resource('students_subjects', 'StudentSubjectController');

