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



Route::get('/adminLogin', 'AdminsController@adminLogin');
Route::get('/adminLogout', 'AdminsController@adminLogout');
Route::post('/adminAuth', 'AdminsController@adminAuth');
Route::get('/adminSuccessful', 'AdminsController@adminSuccessful');

Route::post('/registerSubject', 'SubjectsController@registerSubject');
Route::get('/editSubject/{id}', 'SubjectsController@editSubject');
Route::post('/saveSubject', 'SubjectsController@saveSubject');
Route::get('/addStudents/{subjectCode}', 'SubjectsController@addStudents');
Route::get('/courseTable/{subjectCode}/{course}/{year}', 'SubjectsController@courseTable');

Route::get('/addStudentSubject/{subjectCode}/{userId}', 'StudentSubjectsController@addStudentSubject');
Route::get('/removeStudent/{id}/{subjectCode}', 'StudentSubjectsController@removeStudent');
Route::get('/marks/{subjectCode}', 'StudentSubjectsController@marks');
Route::post('/saveMarks/{subjectCode}', 'StudentSubjectsController@saveMarks');

Auth::routes();
Route::get('/home', 'HomeController@index');
