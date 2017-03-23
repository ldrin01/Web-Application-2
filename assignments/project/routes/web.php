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
//Admin
Route::get('/admin', 'StudentsController@admin');
Route::post('/loginAdmin', 'StudentsController@loginAdmin');
Route::get('/adminHomePage', 'StudentsController@adminHomePage');

//Student
Route::get('/start', 'StudentsController@start');
Route::get('/signupSuccess', 'StudentsController@signupSuccess');
Route::post('/signup', 'StudentsController@signupStudent');
Route::post('/login', 'StudentsController@loginStudent');
Route::post('/logoutStudent', 'StudentsController@logoutStudent');
Route::get('/welcome', 'StudentsController@homePage');

//Subject
Route::post('/registerSubject', 'StudentsController@registerSubject');
Route::get('/registerSubjectSuccess', 'StudentsController@registerSubjectSuccess');
Route::get('/editSubject/{id}', 'StudentsController@editSubject');
Route::post('/saveEditedSubject', 'StudentsController@saveEditedSubject');




// Auth::routes();
// Route::get('/home', 'HomeController@index');
