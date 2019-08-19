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

Route::get('/','Auth\RegisterController@showRegistrationForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/admin',    'UserController@getadmin');
    Route::resource('user', 'UserController');
    Route::resource('{major}/student','StudentController');
    Route::resource('/academic','AcademicController');
    Route::resource('/major',   'MajorController');
    Route::resource('/{major}/subject', 'SubjectController');
    Route::resource('/teacher', 'TeacherController');
    Route::post('/search',  'SearchController@search');
    Route::get('/getmajor', 'SubjectController@getMajor');
    Route::get('teacherinfo','TeacherStudentController@getteacher');
    Route::get('/studentMajor',  'StudentController@getMajor');
    Route::resource('/{teacher}/teacherstudent', 'TeacherStudentController');


    //import export
    Route::get('/gettudentimport/{major_id}','StudentController@getimportfile');
    Route::post('/studentimport/{major_id}', 'StudentController@import');
    Route::get('/export',          'StudentController@export');

    Route::get('/getteacherimport','TeacherController@getimportfile');
    Route::post('/teacherimport', 'TeacherController@import');
    Route::get('/exportteacher',  'TeacherController@export');
});